<?php get_header(); ?>

<div class="swiper-container" style="height: 593px;">
    <div class="cover leftCover"></div>
    <div class="cover rightCover"></div>
    <div class="btnPrev" style="margin-top: 240px"></div>
    <div class="btnNext" style="margin-top: 240px"></div>
    <div class="swiper-wrapper">
        <?php
            $banners = array("banner-01.jpg","banner-02.jpg","banner-03.jpg");
            foreach ($banners as $value) {
        ?>
            <div class="swiper-slide"><img src="<?php echo get_bloginfo("template_url") ?>/img/<?php echo $value ?>" /></div>
        <?php }?>
    </div>

</div>
<div class="coverDiv">
    <p class="title">ACCA</p>
    <p class="detail">湖北省ACCA上海财经大学SIBFI唯一授权培训基地</p>
</div>
<div style="height: 120px"></div>
<div class="page-1">
    <img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title1.png" />
    <div class="content-1">
        <img src="<?php echo get_bloginfo('template_url') ?>/img/1-pic1.jpg" />
        <p class="theme">ACCA,特许公认会计师公会</p>
        <p class="detail">The Association of Chartered Certified Accountants</p>
        <p class="info">ACCA在国内称为“国际注册会计师”，是“特许公认会计师公会”的缩写，成立于1904年，是英国具有特许头衔的4家注册会计师协会之一，也是当今最知名最具有权威性的国际性会计师组织之一，2016年被行业评为“全球最佳专业组织”。</p>
        <a href="<?php echo home_url('/acca/') ?>"><div class="btnMore">了解更多</div></a>
    </div>
    <div class="content-2">
        <img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title1.png" />
        <div class="item"><img src="<?php echo get_bloginfo('template_url') ?>/img/1-pic2.jpg" /><p class="menu">周末班</p></div>
        <div class="item item2">
            <p class="menu2" style="margin-top: 60px;">【适合人群】</p>
            <p>在职白领，海归人士， 会计、财务管理、金融、或其他管理类专业以及其他想学习ACCA的学员</p>
            <p class="menu2">【开课时间】</p>
            <p>周六周日上课，共计536课时</p>
            <p class="menu2">【课程特色】</p>
            <p>由上海财经大学强大的专业师资力量，面对面高质量授课，沉淀丰富的教学经验，考试通过率高达60%-70%</p>
        </div>
        <div class="item"><img src="<?php echo get_bloginfo('template_url') ?>/img/1-pic3.jpg" /><p class="menu">寒暑假班</p></div>
        <div class="item item2">
            <p class="menu2" style="margin-top: 60px;">【适合人群】</p>
            <p>会计、财务管理、金融、或其他管理类专业大学生及固定学习时间人群</p>
            <p class="menu2">【开课时间】</p>
            <p>寒暑假上课，共计536课时</p>
            <p class="menu2">【课程特色】</p>
            <p>由上海财经大学强大的专业师资力量，面对面高质量授课，沉淀丰富的教学经验，考试通过率高达60%-70%</p>
        </div>
        <a href="<?php echo home_url('/course/') ?>"><div class="btnMore">了解更多</div></a>
    </div>
    <img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title2.png" />
    <div class="content-3">
        <div class="item">
            <span class="tag">01</span>
            <div class="info">
                <p class="menu">ACCA等级证书</p>
                <p>学员参加了本培训班并通过了ACCA的F阶段全球统一考试，即可获得ACCA协会颁发的相关等级证书。</p>
            </div>
        </div>
        <div class="item">
            <span class="tag">02</span>
            <div class="info">
                <p class="menu">英国大学会计学学位</p>
                <p>通过ACCA的F阶段课程的学员，可在培训老师的指导下写一篇学术报告（相当于毕业论文）至ACCA协会，通过审核即可获得英国牛津布鲁克斯大学应用会计理学学士学位。</p>
            </div>
        </div>
        <div class="item">
            <span class="tag">03</span>
            <div class="info">
                <p class="menu">大型金融机构就业机会</p>
                <p>参加本培训班并获得ACCA/F阶段证书的学员将获得多家大型企业金融机构推荐实习就业的机会。</p>
            </div>
        </div>
        <div class="item">
            <span class="tag">04</span>
            <div class="info">
                <p class="menu">ACCA在不同学习阶段可相关证书</p>
                <p>1、通过F阶段前3门课程，获得商业会计证书。</p>
                <p>2、通过F阶段9门课程，获得F阶段证书，并可申请获得英国牛津布鲁克斯大学应用会计理学学士学位</p>
                <p>3、通过P阶段5门课程，获得P阶段证书，成为ACCA准会员；</p>
                <p>4、拥有三年工作经验的准会员，可升格为ACCA会员，成为国际会计师精英；</p>
                <p>5、完成ACCA／P阶段后，可申请海外留学或远程学习，加考2-3门专业课程，即可获得海外名校的硕士学位。例如，伦敦大学专业会计硕士，牛津布鲁克斯大学MBA。</p>
            </div>
        </div>
        <div class="item">
            <span class="tag">05</span>
            <div class="info">
                <p class="menu">高额奖学金</p>
                <p>1、ACCA考试全球前三奖励机制</p>
                <p>在上海财经大学ACCA培训班学员F1-F9综合考试获得全球ACCA考试综合排名前三，第一名奖励10万元或同等价值产品。第二名获得8万元奖励或同等价值产品。第三名获得6万元奖励或同等价值产品。</p>
                <p>2、ACCA考试亚洲区域前三奖励机制</p>
                <p>在上海财经大学ACCA培训班学员F1-F9综合考试获得亚洲区域ACCA考试综合排名前三，第一名奖励6万元或同等价值产品。第二名获得5万元奖励或同等价值产品。第三名获得4万元奖励或同等价值产品。</p>
                <p>3、ACCA考试中国区域前三奖励机制</p>
                <p>在上海财经大学ACCA培训班学员F1-F9综合考试获得中国区ACCA考试综合排名前三，第一名奖励5万元或同等价值产品。第二名获得4万元奖励或同等价值产品。第三名获得3万元奖励或同等价值产品。</p>
                <p>4、ACCA考试省级前三奖励机制</p>
                <p>在上海财经大学ACCA培训班学员F1-F9综合考试获得省级ACCA考试综合排名前三，第一名奖励2万元或同等价值产品。第二名获得1万元奖励或同等价值产品。第三名获得5000元奖励或同等价值产品。</p>
            </div>
        </div>
        <a href="<?php echo home_url('/course/') ?>"><div class="btnMore">了解更多</div></a>
    </div>
    <img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title4.jpg" />
    <div class="videoFrame">
        <div class="items">
            <div class="item hover">01</div>
            <div class="item">02</div>
            <div class="item">03</div>
        </div>
        <div class="videoBox">
            <video id="videoPlayer" class="video-js vjs-big-play-centered" width="840" height="472" controls="controls" preload="auto" loop="true" webkit-playsinline playsinline></video>
        </div>
        <p class="name"><span></span><label id="teacherName">Lisa Shen</label></p>
        <p class="detail" id="teacherSpeak">如何简单高效的学习ACCA，简化理解内容，以幽默专业负责的态度减轻大家的学习压力</p>
    </div>
    <img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title3.png" />
    <div class="content-4">
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'category_name' => 'teacher',
                // 控制只显示10篇文章，如果将10改成-1将显示所有文章
                'showposts' => 8,
                'paged' => $paged
            );
            query_posts($args);
        ?>
        <div class="items">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="item">
                    <div class="imgDiv"><?php the_post_thumbnail(); ?></div>
                </div>
            <?php endwhile; ?>
        </div>

        </table>
    </div>
</div>

<?php get_footer('home'); ?>