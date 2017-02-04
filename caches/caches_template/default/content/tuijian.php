<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <!--list为循环处;6条-->
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=55d09235196028c52545e7877c11d790&action=position&posid=20&num=6&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('posid'=>'20','limit'=>$offset.",".$pagesize,'action'=>'position',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->position(array('posid'=>'20','limit'=>$offset.",".$pagesize,'action'=>'position',));}?>
       <?php $n=1;if(is_array($data)) foreach($data AS $z) { ?>
       <a href="<?php echo $z['url'];?>" style="display: block">
       <div class="list">
                <div class="img"></div>
                <div class="con">
                    <h1 class="tit"><?php echo $z['title'];?></h1>
                    <span>2016-05-12</span>
                    <p>
                        <?php echo $z['description'];?>                      
                    </p>   
                </div>
       </div>
       </a>
       <!--<?php var_dump($z)?>-->
       <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>