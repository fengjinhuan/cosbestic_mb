<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>xiangguanfagui.css">
<style>
.box a{
    display: block;
}
</style>
    <div class="banner">
        <div class="banner-border">
            <h1 class="title">相关法规</h1>
            <h2 class="title-con">在化妆品行业的细分领域，努力成为翘楚</h2>
        </div>    
   </div>
  
   <!--list为循环处;6条-->
   <?php include template("content","tuijian"); ?> 
   
<?php include template("content","myfoot"); ?>