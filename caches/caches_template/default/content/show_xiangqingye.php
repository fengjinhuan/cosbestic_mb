<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>xiangqingye.css">

    <div class="banner">
        <div class="banner-border">
            <h1 class="title">行业资讯</h1>
            <h2 class="title-con">在化妆品行业的细分领域，努力成为翘楚</h2>
        </div>    
   </div> 
   <!--详情内容-->
   <div class="main">
       <h1 class="main_title">
           <?php echo $title;?>
       </h1>
       <span>发布时间：2016-01-05</span>
       <img src="<?php echo IMG_PATH;?>images/ban1.png" alt="">
       <p>
           <?php echo $content;?>
       </p>
       <div class="more">
           <div class="top">上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></div>
           <div class="bottom">下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></div>
       </div>
   </div>
<?php include template("content","myfoot"); ?>