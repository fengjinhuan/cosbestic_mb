<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<div class="banner">
    <!--banner图-->
    <div class="aaa">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo IMG_PATH;?>images/banner1.jpg" alt="" class="img_shows">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo IMG_PATH;?>images/banner1.jpg" alt="" class="img_shows">
                </div>
            </div>
            <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="banner_box">
            <div class="banner_tit"></div>
            <div class="banner_con">超越客户愿望，专业创造价值</div>
            <div class="line"></div>
            <a href="<?php echo $CATEGORYS['17']['url'];?>" class="banner_more">
                了解更多
            </a>
    </div>
</div>
<!--主营业 务标题-->
<h1 class="index-h1">主营业务<span></span></h1>
<span class="span">MAIN BUSINESS</span>
<!--主营业务4个模块-->
<ul class="ul_box">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=12a5abdb991063ce215650f1b02b951e&action=position&posid=18&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','limit'=>'4',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $z) { ?>
    <a href="<?php echo $z['url'];?>">
    <li class="li_list">
        <h4>01</h4>
        <span></span>
        <h5><?php echo $z['title'];?></h5>
        <p>Imports of non-special cosmetics for the record</p>
    </li>
    </a>
    <?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
    <!--<li class="li_list">
        <h4>02</h4>
        <span></span>
        <h5>进口特殊类化妆品备案</h5>
        <p>Imported special cosmetics for  the record</p>
    </li>
    <li class="li_list">
        <h4>03</h4>
        <span></span>
        <h5>国产特殊类化妆品备案</h5>
        <p>Domestic special cosmetics for the record</p>
    </li>
    <li class="li_list">
        <h4>04</h4>
        <span></span>
        <h5>国产非特殊类化妆品备案</h5>
        <p>Domestic non-special cosmetics for the record</p>
    </li>-->
</ul>
<!--成功案例标题-->
<h1 class="index-h1">成功案例<span></span></h1>
<span class="span">SUCCESS CASE</span>
<ul class="succ_box">
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
    <a href="<?php echo $CATEGORYS['15']['url'];?>" class="succ_list"></a>
</ul>
<!--底部-->

<!--返回顶部-->
<div class="totop"></div>
<?php include template("content","myfoot"); ?>