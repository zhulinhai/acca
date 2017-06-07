<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/idangerous.swiper2.7.6.css ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/banner.css ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

</head>
<body>
<div id="wrapper">
    <div id="header">
        <div class="logo"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" alt=""></div>
        <div class="btnDiv">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=466749081&site=qq&menu=yes"><button class="btnAsk"><img border="0" src="<?php echo get_bloginfo('template_url') ?>/img/tencent.png" alt="点击这里给我发消息" title="点击这里给我发消息"/>在线咨询</button></a>
            <a href="<?php $cat=get_category_by_slug('submit'); echo get_category_link( $cat->term_id);  ?>"><button class="btnSubmit">马上报名</button></a>
        </div>
        <?php wp_page_menu(array('theme_location' => 'header-menu', 'echo' => true, 'container' => false, 'items_wrap' => '%3$s')) ?>
    </div>