<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/banner.php') ?>

    <div class="page-5 page-5-0">
        <p class="pagePos">您所在的位置：首页-报考资讯-优秀学员</p>
        <div class="mainContent">
            <div class="leftDiv">
                <p class="mainTitle">报考资讯</p>
                <div class="items">
                    <a href="<?php echo home_url('/news/') ?>"><div class="item">报考指南</div></a>
                    <a href="<?php $cat=get_category_by_slug('paper'); echo get_category_link( $cat->term_id);  ?>"><div class="item">历史真题</div></a>
                    <a href="<?php $cat=get_category_by_slug('examinfo'); echo get_category_link( $cat->term_id);  ?>"><div class="item">考试资讯</div></a>
                    <a class="hover" href="<?php $cat=get_category_by_slug('outstanding'); echo get_category_link( $cat->term_id);  ?>"><div class="item">优秀学员</div></a>
                </div>
            </div>
            <div class="infoDiv">
                <?php if(have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <div class="entry">
                            <?php the_content(); ?>
                            <?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
                        </div>

                    </div>
                <?php endwhile; ?>

                <?php else: ?>
                    <div class="post">
                        <h2><?php _e('Not Found'); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="navigation">
            <div class="fLeft"> <?php $cat=get_category_by_slug('paper'); if (get_next_post(true,$cat->term_id,'category')) { next_post_link('上一篇: %link','%title',true, $cat->term_id,'category');} else { echo "已是最新文章";} ?></div>
            <div class="fRight"><?php $cat=get_category_by_slug('paper'); if (get_previous_post(true,$cat->term_id,'category')) { previous_post_link('下一篇: %link','%title',true, $cat->term_id,'category');} else { echo "已是最后文章";} ?></div>
        </div>
    </div>
<?php get_footer(); ?>