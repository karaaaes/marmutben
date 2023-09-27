<?php
   include('templates/header.php');
   include('core/core_functions.php');

   $dataDetailMarmut = getDetailMarmut($_GET['id'], $_GET['categories']);
   if (empty($dataDetailMarmut)) {
      echo '<script>alert("Data Marmut Tidak Ada"); 
      window.location.href = "index.php";</script>';
      exit; 
   }
   $finalPrice = number_format($dataDetailMarmut[0]['harga'], 0, '.', '.');
   $finalName = str_replace(" ", "%20", $dataDetailMarmut[0]['jenis_marmut']);

   $sql = "
      SELECT value FROM t_marmutben_config WHERE id = 1
   ";
   $executeQuery = mysqli_query($conn, $sql);
   $dataConfig = mysqli_fetch_array($executeQuery);
?>
<link rel="stylesheet" href="css/marmut-detail-style.css">
<style>
   .marmut-detail {
      padding-top: 40px;
   }

   /* Media query untuk layar dengan lebar lebih dari 768px (desktop) */
   @media (min-width: 768px) {
      .marmut-detail {
        margin-top: 80px;
      }
   }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {
      // Mendapatkan ID dan kategori dari URL
      var urlParams = new URLSearchParams(window.location.search);
      var id = urlParams.get('id');
      var categories = urlParams.get('categories');

      // Mengeksekusi AJAX saat halaman dimuat
      $.ajax({
         type: "POST",
         url: "hit.php?id="+"id&categories="+categories, // Ganti dengan URL Anda
         data: {
            id: id,
            categories: categories
         },
         success: function (response) {
            $("#marmutDetails").html(response);
         }
      });
   });
</script>
<section class="marmut-detail">
<div id="project" class="project">
   <!-- Detail Beli Section -->
   <div class="container" id="anakanSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Detail Produk</h2>
            </div>
         </div>

         <!-- Image Selling Section -->
         <div class="product_main col-md-6 mb-3">
            <div class="news_img_detail">
               <figure class="zoom-effect">
                  <img src="<?php echo $dataDetailMarmut[0]['image_marmut']; ?>">
               </figure>
            </div>
         </div>
         <!-- End Image Selling Section -->

         <!-- Description Content Section -->
         <div class="col-md-6">
            <div class="news_text mb-3">
               <h1 style="color:black !important; font-size: 36px;font-weight: 600;">
                  <?php echo $dataDetailMarmut[0]['jenis_marmut']; ?></h1>
               <h1 style="margin-top: 0px !important; color: black !important; font-weight: 700;">
                  <div id="originalPrice">
                     <?php
                        $originalPrice = number_format($dataDetailMarmut[0]['harga'], 0, '.', '.');
                        echo "Rp. $originalPrice";
                     ?>
                  </div>
                  <ins id="discountedPrice" style="display: none;"></ins>
               </h1>

               <span><?php echo $dataDetailMarmut[0]['categories']; ?></span>
               <p><?php echo $dataDetailMarmut[0]['description']; ?></p>

               <form action="core/core_functions.php" method="post" enctype="multipart/form-data">
                  <input type="text" value="<?= $dataConfig[0]; ?>" name="email_notifications" hidden>
                  <div class="stock-selector mt-3 mb-4 justify-content-center">
                     <btn class="stock-button minus-button mr-3"
                        style="background-color: #183661;border-color: #183661;">-</btn>
                     <input type="text" name="nama_marmut" value="<?php echo $dataDetailMarmut[0]['jenis_marmut']; ?>"
                        hidden>
                     <input type="text" name="kategori_marmut" value="<?php echo $dataDetailMarmut[0]['categories']; ?>"
                        hidden>
                     <input type="text" name="harga_marmut" value="<?php echo $originalPrice; ?>" hidden>
                     <input class="stock-input" name="jumlah" type="number" value="1" min="1">
                     <btn class="stock-button plus-button ml-3"
                        style="background-color: #183661;border-color: #183661;">+</btn>
                  </div>
                  <button type="submit" name="submitBuy" class="btn btn-primary w-100"
                     style="background-color: #183661;border-color: #183661;">Beli</button>
                  <small id="warning" class="form-text text-muted">*Note : Harga belum termasuk ongkir</small>
               </form>

               <!-- Promo Section -->
               <div class="titlepage mt-5">
                  <h2>Masukkan Kode Promo</h2>
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Kode Promo">
                        <small id="notification" class="form-text text-muted">Masukkan Kode Promo Yang Valid</small>
                        <small id="notificationSuccess" class="form-text text-success" style="display: none;"></small>
                        <small id="notificationFailed" class="form-text text-danger" style="display: none;">Kode Promo
                           Tidak Valid</small>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <button class="btn btn-primary" style="background-color: #183661;border-color: #183661;"
                        onclick="checkPromo()">Check</button>
                  </div>
               </div>
               <!-- End Promo Section -->
            </div>
         </div>
         <!-- End Description Content Section -->
      </div>
      <hr class="mt-5" />
   </div>
   <!-- End Detail Beli Section -->

</section>

   <!-- news section -->
   <?php 
   include('templates/promo.php');
   ?>
   <!-- end news section -->
   <script>
      document.querySelector('a[href="#myDiv"]').addEventListener('click', function (e) {
         e.preventDefault();
         document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
         });
      });
   </script>
   <script>
      const minusButton = document.querySelector('.minus-button');
      const plusButton = document.querySelector('.plus-button');
      const stockInput = document.querySelector('.stock-input');

      minusButton.addEventListener('click', () => {
         const currentValue = parseInt(stockInput.value);
         if (currentValue > 1) {
            stockInput.value = currentValue - 1;
         }
      });

      plusButton.addEventListener('click', () => {
         const currentValue = parseInt(stockInput.value);
         stockInput.value = currentValue + 1;
      });
   </script>
   <script>
      var originalHargaMarmut = <?php echo $dataDetailMarmut[0]['harga']; ?>;

      function checkPromo() {
         var promoInput = document.getElementById("exampleInputEmail1").value;
         var notificationSuccess = document.getElementById("notificationSuccess");
         var notificationFailed = document.getElementById("notificationFailed");
         var originalPrice = document.getElementById("originalPrice");
         var discountedPrice = document.getElementById("discountedPrice");
         var hargaMarmutInput = document.querySelector("input[name='harga_marmut']");

         fetch("cek_promo.php", {
               method: "POST",
               headers: {
                  "Content-Type": "application/x-www-form-urlencoded"
               },
               body: "promo=" + promoInput
            })
            .then(response => response.json())
            .then(data => {
               notificationSuccess.style.display = data.status === "valid" ? "block" : "none";
               notificationFailed.style.display = data.status === "valid" ? "none" : "block";
               originalPrice.style.display = data.status === "valid" ? "none" : "block";
               discountedPrice.style.display = data.status === "valid" ? "block" : "none";

               if (data.status === "valid") {
                  var formattedJumlahPromo = parseFloat(data.jumlahPromo).toLocaleString('id-ID', {
                     style: 'currency',
                     currency: 'IDR'
                  });

                  notificationSuccess.innerHTML =
                     `Kode Promo Berhasil Digunakan. Kamu mendapatkan promo sebesar ${formattedJumlahPromo}!`;

                  var hargaMarmut = originalHargaMarmut - parseFloat(data.jumlahPromo);
                  hargaMarmutInput.value = hargaMarmut;

                  discountedPrice.innerHTML =
                     `Harga Baru: ${hargaMarmut.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}`;
               } else {
                  hargaMarmutInput.value = originalHargaMarmut;
               }
            })
            .catch(error => {
               console.error("Terjadi kesalahan saat mengambil data:", error);
            });
      }
   </script>
   <?php 
include('templates/footer.php');
?>