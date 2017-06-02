<?php get_header(); ?>
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
            <?php }?>
        </div>
    </div>

    <div class="page-5">
        <p class="pagePos">您所在的位置：首页-报考资讯-考试资讯</p>
        <div class="mainContent">
            <div class="leftDiv">
                <p class="mainTitle">报考资讯</p>
                <div class="items">
                    <a href="<?php echo home_url('/news/') ?>"><div class="item">报考指南</div></a>
                    <a href="<?php $cat=get_category_by_slug('paper'); echo get_category_link( $cat->term_id);  ?>"><div class="item">历史真题</div></a>
                    <a class="hover" href="<?php $cat=get_category_by_slug('examinfo'); echo get_category_link( $cat->term_id);  ?>"><div class="item">考试资讯</div></a>
                    <a href="<?php $cat=get_category_by_slug('outstanding'); echo get_category_link( $cat->term_id);  ?>"><div class="item">优秀学员</div></a>
                </div>
            </div>
            <div class="infoDiv">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category_name' => 'examinfo',
                    // 控制只显示10篇文章，如果将10改成-1将显示所有文章
                    'showposts' => 5,
                    'paged' => $paged
                );
                query_posts($args);
                ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="item">
                        <div class="imgDiv"><?php the_post_thumbnail(); ?></div>
                        <div class="info">
                            <div class="title"><?php the_title(); ?></div>
                            <p class="content"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink() ?>"><div class="btnMore">了解更多</div></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="page_navi"><?php par_pagenavi(9); ?></div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>