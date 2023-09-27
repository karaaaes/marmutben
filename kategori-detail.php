<?php
   include('templates/header.php');
   include('core/core_functions.php');

   $checkCategories = checkCategories($_GET['categories']);
   if(empty($checkCategories)){
      echo '<script>alert("Data Kategori Tidak Ada"); 
      window.location.href = "kategori.php";</script>';
      exit; 
   }

   $categoriesId = $_GET['categories'];
   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   $itemsPerPage = 6; // Jumlah item per halaman

   // Fungsi untuk mengambil total jumlah item
   $totalItems = getTotalItems($categoriesId);

   // Menghitung total halaman yang diperlukan
   $totalPages = ceil($totalItems / $itemsPerPage);

   // Menghitung offset
   $offset = ($currentPage - 1) * $itemsPerPage;

?>
<style>
   .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
   }

   .pagination a {
      padding: 10px 15px;
      border: 1px solid #ddd;
      margin: 0 5px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s;
   }

   .pagination a.active {
      background-color: #183661;
      color: white;
      border-color: #183661;
   }

   .pagination a:hover {
      background-color: #f4f4f4;
      border-color: black;
      color: black;
   }

   .whatsapp {
      display: none;
      position: fixed;
      bottom: 10px;
      /* Mengatur jarak dari bawah ke 20px */
      left: 20px;
      /* Mengatur jarak dari kiri ke 20px */
      z-index: 99;
      cursor: pointer;
      padding: 10px;
      color: #fff;
      border: none;
      height: 70px;
      width: 70px;
   }

   .kategori_detail {
      padding-top: 70px;
   }

   /* Media query untuk layar dengan lebar lebih dari 768px (desktop) */
   @media (min-width: 768px) {
      .kategori_detail {
         margin-top: 80px;
      }
   }
</style>
<section class="kategori_detail">
   <div id="project" class="project">
      <!-- Anakan section -->
      <div class="container" id="anakanSection">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Marmut Anakan</h2>
               </div>
            </div>
         </div>

         <div class="row">
            <?php 
               // Mengambil data produk untuk halaman saat ini
               $dataMarmutanakan = getKategoriMarmutDetail($categoriesId, $itemsPerPage, $offset);
               if (!empty($dataMarmutanakan)) {
                  foreach ($dataMarmutanakan as $marmutAnakan) {
                     $finalPrice = number_format($marmutAnakan['harga'], 0, '.', '.');
            ?>
            <div class="col-md-4 marmut-card">
               <a
                  href="marmut-detail.php?id=<?php echo $marmutAnakan['id']?>&categories=<?php echo $marmutAnakan['categories_marmut']?>">
                  <div class="news_img_best">
                     <figure><img src="<?php echo $marmutAnakan['image_marmut'] ?>"></figure>
                  </div>
                  <div class="news_text mb-3 text-center">
                     <h3><?php echo $marmutAnakan['jenis_marmut'] ?></h3>
                     <span>Rp. <?php echo $finalPrice; ?></span><br />
                     <span><?php echo $marmutAnakan['categories'] ?></span>
                  </div>
                  <div class="col-md-12 text-center">
                     <btn class="btn btn-primary w-100" style="background-color: #183661;border-color: #183661;">Beli
                     </btn>
                  </div>
               </a>
            </div>
            <?php 
               }
            ?>
            <div class="col-md-12">
               <!-- Pagination -->
               <div class="pagination">
                  <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
                  <a href="kategori-detail.php?categories=<?php echo $categoriesId; ?>&page=<?php echo $page; ?>"
                     class="<?php echo ($currentPage == $page) ? 'active' : ''; ?>">
                     <?php echo $page; ?>
                  </a>
                  <?php endfor; ?>
               </div>
               <!-- end six_box section -->
               <a href="https://api.whatsapp.com/send?phone=6287780605997"><img src="images/whatsapp.webp" id="whatsapp"
                     class="whatsapp" alt=""></a>
               <!-- End Pagination -->
            </div>
            <?php 
            }
         ?>
         </div>
      </div>
      <hr class="mt-5" />
   </div>
   <!-- End Anakan Section -->

   <!-- fashion section -->
   <div class="fashion mt-5">
      <img src="images/big-banner.jpg" alt="#" />
   </div>
   <!-- end fashion section -->
   <!-- news section -->
   <?php 
      include('templates/promo.php');
   ?>
   <!-- end news section -->
</section>

<script>
   const whatsapp = document.getElementById("whatsapp");
   // Tampilkan atau sembunyikan tombol berdasarkan posisi scroll
   whatsapp.style.display = "block";

   document.querySelector('a[href="#myDiv"]').addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
         behavior: 'smooth'
      });
   });
</script>
<?php 
include('templates/footer.php');
?>