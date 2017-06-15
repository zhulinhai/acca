<div id="linkFrame">
    <div class="content">
        <div class="leftDiv">
            <img class="logo-gray" src="<?php echo get_bloginfo('template_url') ?>/img/logo-gray.png" />
            <p><img class="icon" src="<?php echo get_bloginfo('template_url') ?>/img/phone.png">电话：027-87579718</p>
            <p><img class="icon" src="<?php echo get_bloginfo('template_url') ?>/img/email.png">邮箱：YANGBO@ZQZYCM.COM</p>
        </div>
        <div class="rightDiv" style="display: none">
            <img src="<?php echo get_bloginfo('template_url') ?>/img/qrcode.jpg" />
            <p>扫一扫，关注我们</p>
        </div>
        <table border="0">
            <tr>
                <td><a href="<?php echo home_url('/acca/') ?>">ACCA</a></td>
                <td><a href="<?php echo home_url('/course/') ?>">面授课程</a></td>
                <td><a href="<?php echo home_url('/team/') ?>">师资团队</a></td>
                <td><a href="<?php echo home_url('/news/') ?>">报考指南</a></td>
            </tr>
            <tr>
                <td><a href="<?php echo home_url('/acca/') ?>">ACCA是什么</a></td>
                <td><a href="<?php $cat=get_category_by_slug('weekend'); echo get_category_link( $cat->term_id);  ?>">双休班</a></td>
                <td></td>
                <td><a href="<?php echo home_url('/category/news/paper/') ?>">历年真题</a></td>
            </tr>
            <tr>
                <td><a href="<?php echo home_url('/acca/') ?>">ACCA课程</a></td>
                <td><a href="<?php $cat=get_category_by_slug('wsvacation'); echo get_category_link( $cat->term_id);  ?>">寒暑班</a></td>
                <td></td>
                <td><a href="<?php echo home_url('/category/news/examinfo/') ?>">考试资讯</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?php echo home_url('/course/') ?>">课程优势</a></td>
                <td></td>
                <td><a href="<?php echo home_url('/category/news/outstanding/') ?>">优秀学员</a></td>
            </tr>
        </table>
        <p class="address"><img class="icon" src="<?php echo get_bloginfo('template_url') ?>/img/location.png">地址：北京市海淀区中关村南大街天作国际中心裙楼二层A019&nbsp;&nbsp;&nbsp;&nbsp;武汉市洪山区珞喻路10号群光中心1324号</p>
    </div>
</div>
<div id="footer">
    <p>版权所有：中青卓越传媒集团有限公司版权所有，复制必究</p>
</div>
</div>


<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery-1.10.1.min.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/js/idangerous.swiper2.7.6.min.js"></script>

<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<!-- 加载 VideoJS js -->
<script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
<!-- 皮肤 -->
<link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
<script type="text/javascript">
    var videoJson = [
        {'name':'Lisa Shen', 'thumbDetail': '如何简单高效的学习ACCA，简化理解内容，以幽默专业负责的态度减轻大家的学习压力','src': 'http://vedio.yunmfang.com/5814cb957479a.mp4', poster:'http://vedio.yunmfang.com/1-placeHolder-10.jpg'},
        {'name':'Mona Li', 'thumbDetail': '分段式学习，每闯一关就是迈进一大步','src': 'http://vedio.yunmfang.com/5814c9c26f5ec.mp4', poster:'http://vedio.yunmfang.com/1-placeHolder-20.jpg'},
        {'name':'Juliet Zhou', 'thumbDetail': '孜孜不倦的学习精神培养自己缜密的思维','src': 'http://vedio.yunmfang.com/5814cb308e8a8.mp4', poster:'http://vedio.yunmfang.com/1-placeHolder-30.jpg'}
    ];
    var videoIndex = 0;
    var bannerSwiper;
    /*初始Swiper*/
    function initSwiper() {
        bannerSwiper = new Swiper('.swiper-container', {
            threshold : 20,
            loop: true,
            followFinger: false,
            slidesPerView: 'auto',
            centeredSlides: true,
            slideToClickedSlide: true,
            autoplay: 3000,
            autoplayDisableOnInteraction: false
        });

        $('.btnPrev').click(function (e) {
            bannerSwiper.swipePrev();
        });
        $('.btnNext').click(function (e) {
            bannerSwiper.swipeNext();
        });
    }

    /*设置页面banner左右浮层*/
    function initBannerCover() {
        var coverWidth = ($(window).width() - 1000)/2;
        $('.cover').width(coverWidth).height($('.swiper-container').height());
    }
    
    function updateVideoInfo(index) {
        var player = videojs('videoPlayer');
        player.src(videoJson[index].src);
        player.poster(videoJson[index].poster);
        $('#teacherName').html(videoJson[index].name);
        $('#teacherSpeak').html(videoJson[index].thumbDetail);
    }
    
    $(function () {
        initBannerCover();
        initSwiper();
        $(window).resize(initBannerCover);
        updateVideoInfo(0);

        $('.items').find('.item').click(function () {
            $('.items').find('.item')[videoIndex].setAttribute('class','item');
            videoIndex = $(this).index();
            $(this).addClass('hover');
            updateVideoInfo(videoIndex);
        });
    });
</script>
</body>
</html>