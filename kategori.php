<?php
   include('templates/header.php');
   include('core/core_functions.php');
?>
<style>
   .scroll-to-top {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 99;
      cursor: pointer;
      padding: 10px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 50%;
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


   .kategori {
    padding-top: 70px;
}

/* Media query untuk layar dengan lebar lebih dari 768px (desktop) */
@media (min-width: 768px) {
    .kategori {
        margin-top: 80px;
    }
}
</style>
<section class="kategori">
<!-- six_box section -->
<div id="project" class="project" style="padding: 50px 0 30px 0 !important;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Kategori - Paling Laris</h2>
            </div>
         </div>
      </div>
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <a href="#anakanSection">
                     <div class="six_probpx yellow_bg">
                        <i><img src="images/icon-little-marmut3.png" alt="#" /></i>
                        <span>Anakan</span><br />
                        <span>Rp. 40k - 60k</span>
                     </div>
                  </a>
               </div>
               </a>
               <div class="col-md-2 col-sm-4 pa_left">
                  <a href="#remajaSection">
                     <div class="six_probpx bluedark_bg">
                        <i><img src="images/icon-little-marmut.png" alt="#" /></i>
                        <span>Remaja</span><br />
                        <span>Rp. 40k - 60k</span>
                     </div>
                  </a>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <a href="#indukanSection">
                     <div class="six_probpx yellow_bg">
                        <i><img src="images/icon-little-marmut2.png" alt="#" /></i>
                        <span>Indukan</span><br />
                        <span>Rp. 40k - 60k</span>
                     </div>
                  </a>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <a href="#buntingSection">
                     <div class="six_probpx bluedark_bg">
                        <i><img src="images/icon-little-marmut4.png" alt="#" /></i>
                        <span>Bunting</span><br />
                        <span>Rp. 40k - 60k</span>
                  </a>
               </div>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <a href="#indukanHiasSection">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/icon-little-marmut5.png" alt="#" /></i>
                     <span>Indukan H</span><br />
                     <span>Rp. 40k - 60k</span>
                  </div>
               </a>
            </div>
            <div class="col-md-2 col-sm-4 pa_left">
               <a href="#buntingHiasSection">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/icon-little-marmut6.png" alt="#" /></i>
                     <span>Bunting H</span><br />
                     <span>Rp. 40k - 60k</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- end six_box section -->
   <button id="scrollToTopBtn" class="scroll-to-top">Scroll to Top</button>
   <!-- end six_box section -->
   <a href="https://api.whatsapp.com/send?phone=6287780605997"><img src="images/whatsapp.webp" id="whatsapp" class="whatsapp" alt=""></a>
</div>
<div id="project" class="project">
   <!-- Anakan Section -->
   <div class="container" id="anakanSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Anakan</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
         $dataMarmutanakan = getKategoriMarmut(1);
         if (!empty($dataMarmutanakan)) {
            foreach ($dataMarmutanakan as $marmutAnakan) {
               $finalPrice = number_format($marmutAnakan['harga'], 0, '.', '.');
         ?>
         <div class="col-md-4 marmut-card">
            <a href="marmut-detail.php?id=<?php echo $marmutAnakan['id']?>&categories=<?php echo $marmutAnakan['categories_marmut']?>">
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
            <a class="read_more" href="kategori-detail.php?categories=1">See More</a>
         </div>
         <?php 
         } else {
      ?>
         <div class="col-md-12 d-flex justify-content-center align-items-center">
            <p>Data Tidak Ditemukan</p>
         </div>
         <?php    
         }
      ?>
      </div>
   </div>
   <hr class="mt-5" />
   <!-- End Anakan Section -->


   <!-- Remaja Section -->
   <div class="container" id="remajaSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Remaja</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
         $dataMarmutRemaja = getKategoriMarmut(2);
         if (!empty($dataMarmutRemaja)) {
            foreach ($dataMarmutRemaja as $marmutRemaja) {
               $finalPrice = number_format($marmutRemaja['harga'], 0, '.', '.');
         ?>
         <div class="col-md-4 marmut-card">
            <a href="marmut-detail.php?id=<?php echo $marmutRemaja['id']?>&categories=<?php echo $marmutRemaja['categories_marmut']?>">
               <div class="news_img_best">
                        <figure><img src="<?php echo $marmutRemaja['image_marmut'] ?>"></figure>
                     </div>
               <div class="news_text mb-3 text-center">
                  <h3><?php echo $marmutRemaja['jenis_marmut'] ?></h3>
                  <span>Rp. <?php echo $finalPrice; ?></span><br />
                  <span><?php echo $marmutRemaja['categories'] ?></span>
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
            <a class="read_more" href="kategori-detail.php?categories=2">See More</a>
         </div>
         <?php 
         } else {
      ?>
         <div class="col-md-12 d-flex justify-content-center align-items-center">
            <p>Data Tidak Ditemukan</p>
         </div>
         <?php    
         }
      ?>
      </div>
   </div>
   <hr class="mt-5" />
   <!-- End Remaja Section -->

   <!-- Indukan Section -->
   <div class="container" id="indukanSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Indukan</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
         $dataMarmutIndukan = getKategoriMarmut(3);
         if (!empty($dataMarmutIndukan)) {
            foreach ($dataMarmutIndukan as $marmutIndukan) {
               $finalPrice = number_format($marmutIndukan['harga'], 0, '.', '.');
         ?>
         <div class="col-md-4 marmut-card">
            <a href="marmut-detail.php?id=<?php echo $marmutIndukan['id']?>&categories=<?php echo $marmutIndukan['categories_marmut']?>">
               <div class="news_img_best">
                        <figure><img src="<?php echo $marmutIndukan['image_marmut'] ?>"></figure>
                     </div>
               <div class="news_text mb-3 text-center">
                  <h3><?php echo $marmutIndukan['jenis_marmut'] ?></h3>
                  <span>Rp. <?php echo $finalPrice; ?></span><br />
                  <span><?php echo $marmutIndukan['categories'] ?></span>
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
            <a class="read_more" href="kategori-detail.php?categories=3">See More</a>
         </div>
         <?php 
         } else {
      ?>
         <div class="col-md-12 d-flex justify-content-center align-items-center">
            <p>Data Tidak Ditemukan</p>
         </div>
         <?php    
         }
      ?>
      </div>
   </div>
   <hr class="mt-5" />
   <!-- End Indukan Section -->

   <!-- Bunting Section -->
   <div class="container" id="buntingSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Bunting</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
         $dataMarmutBunting = getKategoriMarmut(4);
         if (!empty($dataMarmutBunting)) {
            foreach ($dataMarmutBunting as $marmutBunting) {
               $finalPrice = number_format($marmutBunting['harga'], 0, '.', '.');
         ?>
         <div class="col-md-4 marmut-card">
            <a href="marmut-detail.php?id=<?php echo $marmutBunting['id']?>&categories=<?php echo $marmutBunting['categories_marmut']?>">
               <div class="news_img_best">
                        <figure><img src="<?php echo $marmutBunting['image_marmut'] ?>"></figure>
                     </div>
               <div class="news_text mb-3 text-center">
                  <h3><?php echo $marmutBunting['jenis_marmut'] ?></h3>
                  <span>Rp. <?php echo $finalPrice; ?></span><br />
                  <span><?php echo $marmutBunting['categories'] ?></span>
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
            <a class="read_more" href="kategori-detail.php?categories=4">See More</a>
         </div>
         <?php 
         } else {
      ?>
         <div class="col-md-12 d-flex justify-content-center align-items-center">
            <p>Data Tidak Ditemukan</p>
         </div>
         <?php    
         }
      ?>
      </div>
   </div>
   <hr class="mt-5" />
   <!-- End Bunting Section -->

   <!-- IndukanHias Section -->
   <div class="container" id="indukanHiasSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Indukan Hias</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
         $dataMarmutIndukanHias = getKategoriMarmut(5);
         if (!empty($dataMarmutIndukanHias)) {
            foreach ($dataMarmutIndukanHias as $marmutIndukanHias) {
               $finalPrice = number_format($marmutIndukanHias['harga'], 0, '.', '.');
         ?>
         <div class="col-md-4 marmut-card">
            <a href="marmut-detail.php?id=<?php echo $marmutIndukanHias['id']?>&categories=<?php echo $marmutIndukanHias['categories_marmut']?>">
               <div class="news_img_best">
                        <figure><img src="<?php echo $marmutIndukanHias['image_marmut'] ?>"></figure>
                     </div>
               <div class="news_text mb-3 text-center">
                  <h3><?php echo $marmutIndukanHias['jenis_marmut'] ?></h3>
                  <span>Rp. <?php echo $finalPrice; ?></span><br />
                  <span><?php echo $marmutIndukanHias['categories'] ?></span>
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
            <a class="read_more" href="kategori-detail.php?categories=5">See More</a>
         </div>
         <?php 
         } else {
      ?>
         <div class="col-md-12 d-flex justify-content-center align-items-center">
            <p>Data Tidak Ditemukan</p>
         </div>
         <?php    
         }
      ?>
      </div>
   </div>
   <hr class="mt-5" />
   <!-- End IndukanHias Section -->

   <!-- BuntingHias Section -->
   <div class="container" id="buntingHiasSection">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Bunting Hias</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
         $dataMarmutBuntingHias = getKategoriMarmut(6);
         if (!empty($dataMarmutBuntingHias)) {
            foreach ($dataMarmutBuntingHias as $marmutBuntingHias) {
               $finalPrice = number_format($marmutBuntingHias['harga'], 0, '.', '.');
         ?>
         <div class="col-md-4 marmut-card">
            <a href="marmut-detail.php?id=<?php echo $marmutBuntingHias['id']?>&categories=<?php echo $marmutBuntingHias['categories_marmut']?>">
               <div class="news_img_best">
                        <figure><img src="<?php echo $marmutBuntingHias['image_marmut'] ?>"></figure>
                     </div>
               <div class="news_text mb-3 text-center">
                  <h3><?php echo $marmutBuntingHias['jenis_marmut'] ?></h3>
                  <span>Rp. <?php echo $finalPrice; ?></span><br />
                  <span><?php echo $marmutBuntingHias['categories'] ?></span>
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
            <a class="read_more" href="kategori-detail.php?categories=6">See More</a>
         </div>
         <?php 
         } else {
      ?>
         <div class="col-md-12 d-flex justify-content-center align-items-center">
            <p>Data Tidak Ditemukan</p>
         </div>
         <?php    
         }
      ?>
      </div>
   </div>
   <hr class="mt-5" />
   <!-- End BuntingHias Section -->

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
</section>
   <script>
      document.querySelector('a[href="#myDiv"]').addEventListener('click', function (e) {
         e.preventDefault();
         document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
         });
      });
   </script>
   <script>
      const scrollToTopBtn = document.getElementById("scrollToTopBtn");

      // Tampilkan atau sembunyikan tombol berdasarkan posisi scroll
      window.addEventListener("scroll", () => {
         if (window.scrollY > 100) {
            scrollToTopBtn.style.display = "block";
         } else {
            scrollToTopBtn.style.display = "none";
         }
      });

      const whatsapp = document.getElementById("whatsapp");
      // Tampilkan atau sembunyikan tombol berdasarkan posisi scroll
      whatsapp.style.display = "block";

      // Fungsi untuk menggulir ke atas
      scrollToTopBtn.addEventListener("click", () => {
         window.scrollTo({
            top: 0,
            behavior: "smooth"
         });
      });
   </script>
   <?php 
include('templates/footer.php');
?>