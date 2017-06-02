<div class="swiper-container">
    <div class="cover leftCover"></div>
    <div class="cover rightCover"></div>
    <div class="btnPrev"></div>
    <div class="btnNext"></div>
    <div class="swiper-wrapper">
        <?php
        $banners = array("2-banner1.jpg","2-banner2.jpg","2-banner3.jpg","2-banner4.jpg");
        foreach ($banners as $value) {
            ?>
            <div class="swiper-slide"><img src="<?php echo get_bloginfo("template_url") ?>/img/<?php echo $value ?>" /></div>
        <?php } ?>
    </div>
</div>