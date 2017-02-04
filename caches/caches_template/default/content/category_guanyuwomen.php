<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>guanyuwomen.css">
 <div class="con-box" style="background: #f4f4f4;height: auto;"> 
    <div class="banner">
        <div class="banner-border">
            <h1 class="title">行内资讯</h1>
            <h2 class="title-con">在化妆品行业的细分领域，努力成为翘楚</h2>
        </div>    
   </div>
   <div class="con">
       <div class="left"></div>
       <div class="right">
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1850c72b1e0ca13face3f0f4fc602fa&action=category&catid=10&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?> 
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
           <span>公司简介</span>
           <p>北京妆倍佳生物科技有限公司简称妆倍佳，成立于2008年主创人员1999年即进入化妆品行业从事卫生许可相关业务团可相关业务团队成员具备扎实具备扎实的技术
           <a href="<?php echo $v['url'];?>" class="more">[详情]</a></p>
           
       </div>
   </div>
    <a href="<?php echo $v['url'];?>" style="display: block;">
   <div class="join">
      
       <h1>招贤纳士</h1>
       <div class="line"></div>
       <span>我们期待你的加入</span>
      
   </div>
    </a> 
    <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
  </div>  
  
<?php include template("content","myfoot"); ?>