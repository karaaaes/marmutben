<!-- promo section -->
<div class="news mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Promo Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
               $dataPromo = getListPromo();
               foreach ($dataPromo as $promo) {
            ?>
            <div class="col-md-12 margin_top40">
                <div class="row d_flex">
                    <div class="col-md-5">
                        <div class="news_img">
                            <figure><img src="<?php echo $promo['image_promo']; ?>"></figure>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="news_text">
                            <h3><?php echo $promo['nama_promo']; ?></h3>
                            <span><?php echo $promo['created_at']; ?></span>
                            <p><?php echo $promo['caption_promo']; ?></p>
                            <span>Kode Voucher : <?php echo $promo['kode_promo']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
               }
            ?>
        </div>
    </div>
</div>
<!-- end promo section -->