<?php 
include('templates/header.php');
include('core/core_functions.php');
?>
<style>
      /* Default padding untuk mobile */
.banner_main {
    padding-top: 100px;
}

/* Media query untuk layar dengan lebar lebih dari 768px (desktop) */
@media (min-width: 768px) {
    .banner_main {
        margin-top: 80px;
    }
}
.whatsapp {
      display: none;
      position: fixed;
      bottom: 10px; /* Mengatur jarak dari bawah ke 20px */
      left: 20px; /* Mengatur jarak dari kiri ke 20px */
      z-index: 99;
      cursor: pointer;
      padding: 10px;
      color: #fff;
      border: none;
      height: 70px;
      width: 70px;
   }
</style>


<!-- banner -->
<section class="banner_main">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="text-bg">
               <h1 style="color: black !important;"> <span class="blodark"> MARMUTBEN <br>Paling Murah 2023 </span>
               </h1>
               <p>Tempat jual-beli marmut terpercaya!</p>
               <a class="read_more mb-3" href="kategori.php">Beli Sekarang</a>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ban_img">
               <!-- <figure><img src="images/ban_img.png" alt="#"/></figure> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end banner -->
<!-- six_box section -->
<div class="six_box">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx yellow_bg">
               <i><img src="images/icon-little-marmut3.png" alt="#" /></i>
               <span>Anakan</span><br />
               <span>Rp. 40k - 60k</span>
            </div>
         </div>
         </a>
         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx bluedark_bg">
               <i><img src="images/icon-little-marmut.png" alt="#" /></i>
               <span>Remaja</span><br />
               <span>Rp. 40k - 60k</span>
            </div>
         </div>
         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx yellow_bg">
               <i><img src="images/icon-little-marmut2.png" alt="#" /></i>
               <span>Indukan</span><br />
               <span>Rp. 40k - 60k</span>
            </div>
         </div>
         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx bluedark_bg">
               <i><img src="images/icon-little-marmut4.png" alt="#" /></i>
               <span>Bunting</span><br />
               <span>Rp. 40k - 60k</span>
            </div>
         </div>
         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx yellow_bg">
               <i><img src="images/icon-little-marmut5.png" alt="#" /></i>
               <span>Indukan H</span><br />
               <span>Rp. 40k - 60k</span>
            </div>
         </div>
         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx bluedark_bg">
               <i><img src="images/icon-little-marmut6.png" alt="#" /></i>
               <span>Bunting H</span><br />
               <span>Rp. 40k - 60k</span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end six_box section -->

<!-- end six_box section -->
<a href="https://api.whatsapp.com/send?phone=6287780605997"><img src="images/whatsapp.webp" id="whatsapp" class="whatsapp" alt=""></a>

<!-- project section -->
<div id="project" class="project">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Paling Laris</h2>
            </div>
         </div>
      </div>
      <div class="row">
            <?php 
               $dataBestSellerMarmut = getMarmutBestSeller();

               foreach ($dataBestSellerMarmut as $marmut) {
               $finalPrice = number_format($marmut['harga'], 0, '.', '.');
            ?>
            <div class="col-md-4 mt-5">
               <a href="marmut-detail.php?id=<?php echo $marmut['marmut_id']?>&categories=<?php echo $marmut['categories_marmut']?>">
                  <div class="news_item">
                     <div class="news_img_best">
                        <figure><img src="<?php echo $marmut['image_marmut']; ?>"></figure>
                     </div>
                     <div class="news_text mb-3 text-center">
                        <h3><?php echo $marmut['jenis_marmut']; ?></h3>
                        <span>Rp. <?php echo $finalPrice; ?></span><br />
                        <span><?php echo $marmut['categories'] . " - Terjual : " . $marmut['jumlah_terjual']; ?></span>
                     </div>
                     <div class="col-md-12 text-center">
                        <btn class="btn btn-primary w-100" style="background-color: #183661;border-color: #183661;">Beli
                        </btn>
                     </div>
                  </div>
               </a>
            </div>
            <?php
               }
            ?>
            <div class="col-md-12">
               <a class="read_more" href="kategori.php">See More</a>
            </div>

      </div>
   </div>
   <!-- end project section -->

   <!-- fashion section -->
   <div class="fashion mt-5">
      <img src="images/big-banner.jpg" alt="#" />
   </div>
   <!-- end fashion section -->

   <!-- promo section -->
   <?php
   include('templates/promo.php');
   ?>
   <!-- end promo section -->

   <?php
   include('templates/footer.php');
   ?>

   <script>
      const whatsapp = document.getElementById("whatsapp");
      // Tampilkan atau sembunyikan tombol berdasarkan posisi scroll
      whatsapp.style.display = "block";
   </script>