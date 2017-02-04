<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>yewujiesao.css">
     <div class="banner">
        <div class="banner-border">
            <h1 class="title">业务介绍</h1>
            <h2 class="title-con">在化妆品行业的细分领域，努力成为翘楚</h2>
        </div>    
   </div> 
  
         <!--文章内容-->
        <div class="cons">
            <a href="<?php echo $CATEGORYS['60']['url'];?>">
         <h1 class="top_titles">主营业务</h1>
         </a>
         <div class="navs">
             <!--面包屑-->
             <a href="<?php echo siteurl($siteid);?>"><</a>
              <?php echo $catname;?>
         </div>
         <!--循环二级导航-->
         <ul class="sec_nav">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8c1d07234a6d267fba22c6db022ae883&action=category&catid=50&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'50','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?> 
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
             <li class="nav_list">
                 <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
             </li>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
             
         </ul>
        <div class="content">
             <!--<?php var_dump($v)?>-->
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=349ec6e51df2777796a817b6d661a198&action=lists&catid=%24catid&num=1&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
                         <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                         <?php echo $v['content'];?>
              <?php $n++;}unset($n); ?>
				 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>            
         </div>
        
         
   </div>
  
<?php include template("content","myfoot"); ?>