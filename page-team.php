<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/banner.php') ?>

    <div class="page-4">
        <div class="headDiv">
            <p class="p1">上海财经大学优质师资</p>
            <p>匠人之心    王牌教学</p>
        </div>
        <p class="pagePos">您所在的位置：首页-师资团队</p>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'category_name' => 'teacher',
                // 控制只显示10篇文章，如果将10改成-1将显示所有文章
                'showposts' => 5,
                'paged' => $paged
            );
            query_posts($args);
        ?>
        <div class="items">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="item">
                    <div class="imgDiv"><?php the_post_thumbnail(); ?></div>
                    <div class="info">
                        <div class="title"><span></span><?php the_title(); ?></div>
                        <p class="content"><?php the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="page_navi"><?php par_pagenavi(9); ?></div>
    </div>
<?php get_footer(); ?>

