<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>



<?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>gongsijianjie.css">
    <div class="banner">
        <div class="banner-border">
            <h1 class="title">啊啊啊啊</h1>
            <h2 class="title-con">在化妆品行业的细分领域，努力成为翘楚</h2>
        </div>    
   </div>
   <div class="title_box">
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20b965c9e5077d5b4e2bf1e953492ed8&action=category&catid=10&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?> 
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
       <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
       <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
   </div>
   <div class="con">
       <p>
       妆倍佳团队成员具备丰富的进口化妆品备案经验，有专业化妆品技术人员和专家队伍支持，申报的产品主要来自世界各地，以法国、美国、瑞士、英国、德国、韩国为主，同时，也有来自意大利、日本、泰国、越南、台湾等地区。所谓“申报的国产特殊类化妆品遍布中国的20多个省市。读万卷书，不如行万里路；行万里路，不如见客户无数”，我们在过往岁月中积累的丰富经验将会成就您日后在中国可以预见的辉煌。
       </p>
       <p>
        十余年来，化妆品的有关市场准入规则在不断地调整，妆倍佳的团队目睹了政策的整个变迁过程，所谓“知其然，而知其所以然”，我们比一般的公司更了解什么是化妆品在中国的市场准入。
        </p>
        <p>
        妆倍佳团队成员具备丰富的进口化妆品备案经验，有专业化妆品技术人员和专家队伍支持，申报的产品主要来自世界各地
        </p>
        
        <font>妆倍佳的理想：</font>
        <br>
        在化妆品行业的细分领域，努力成为翘楚
        <br>
        <font>妆倍佳的使命：</font>
        <br>
        成为进口化妆品进入中国的最理想的咨询机构
        <br>
        <font>妆倍佳的价值观：</font>
        <br>
        超越客户期望，专业创造价值
        
   </div>
<?php include template("content","myfoot"); ?>