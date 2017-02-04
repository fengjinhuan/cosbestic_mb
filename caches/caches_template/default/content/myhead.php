<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>index.css">
</head>
<script src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script src="<?php echo JS_PATH;?>jquery.transit.js"></script>
<script src="<?php echo JS_PATH;?>swiper.js"></script>
<script src="<?php echo JS_PATH;?>index.js"></script>
<body>
<header>
    <a href="<?php echo siteurl($siteid);?>"></a>
    <div class="nav_box"></div>
    <div class="nav_close">
        <div class="c1"></div>
        <div class="c2"></div>
    </div>
    <ul class="nav_shows">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=522dcf79f84779c8c187ca374072cc0d&action=category&catid=0&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
        <a href="<?php echo siteurl($siteid);?>" class="sec_nav">返回首页</a>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <a href="<?php echo $v['url'];?>" class="sec_nav"><?php echo $v['catname'];?></a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</header>