<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>hanneizixun.css">
    <div class="banner">
        <div class="banner-border">
            <h1 class="title">行内资讯</h1>
            <h2 class="title-con">在化妆品行业的细分领域，努力成为翘楚</h2>
        </div>    
   </div>
   <ul class="con">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=55d09235196028c52545e7877c11d790&action=position&posid=20&num=6&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('posid'=>'20','limit'=>$offset.",".$pagesize,'action'=>'position',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->position(array('posid'=>'20','limit'=>$offset.",".$pagesize,'action'=>'position',));}?>
       <?php $n=1;if(is_array($data)) foreach($data AS $z) { ?>
      
       <li class="list">
            <a href="<?php echo $z['url'];?>">
           <div class="img"></div>
           <div class="span_box">
               <h1><?php echo $z['title'];?></h1>
               <span>2016-05-12</span>
               <p><?php echo $z['description'];?> </p>
           </div>
            <a href="">
       </li>

        <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       
   </ul>
   <button>点击加载更多</button>
<?php include template("content","myfoot"); ?>