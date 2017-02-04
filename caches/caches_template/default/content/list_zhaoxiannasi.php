<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","myhead"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>zhaoxiannasi.css">
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
   
   <!--活动策划标题-->
    <div class="con">
		<!--二级导航-->
        <ul class="con_box">
            <li class="title_active">活动策划
                <div class="con_span">
                    <span class="jia jiaact">+</span>
                    <span class="jian">-</span>
                </div>
            </li>
            <div class="con_p active">
                <h5>岗位职责：</h5>
                 <p>  1.啊肯德基埃里克森按实际打卡机的 阿克苏机读卡奥斯卡的接口
                    <br>
                    2.奥斯卡大奥斯卡大看啊就是打开爱打架
                    <br>
                    3.按时打卡机艾迪康请问我我u饿哦奇缺IQ答啊圣诞快乐奇偶奇闻IEu
                    <br>
                    4.大苏打hi区位和卡少女看得开到刘去哦额奥杜亚啊大家卡几点啦
                 </p>    
                <h5>任职资格条件：</h5>
                    <p>
                1.爱打架爱神的箭空间啊啊大家啦
                <br>
                2.我饿哦我爱神的箭卡大事记结婚多久啊
                <br>
                3.阿丢千万打开了
                <br>
                4.起我IE去企鹅欧大量
                </p>
            </div>
        </ul>
        <ul class="con_box">
            <li>客户经理/高级客户经理
                <div class="con_span">
                    <span class="jia jiaact">+</span>
                    <span class="jian">-</span>
                </div>
            </li>
            <div class="con_p">
                <h5>岗位职责：</h5>
                 <p>  1.啊肯德基埃里克森按实际打卡机的 阿克苏机读卡奥斯卡的接口
                    <br>
                    2.奥斯卡大奥斯卡大看啊就是打开爱打架
                    <br>
                    3.按时打卡机艾迪康请问我我u饿哦奇缺IQ答啊圣诞快乐奇偶奇闻IEu
                    <br>
                    4.大苏打hi区位和卡少女看得开到刘去哦额奥杜亚啊大家卡几点啦
                 </p>    
                <h5>任职资格条件：</h5>
                    <p>
                1.爱打架爱神的箭空间啊啊大家啦
                <br>
                2.我饿哦我爱神的箭卡大事记结婚多久啊
                <br>
                3.阿丢千万打开了
                <br>
                4.起我IE去企鹅欧大量
                </p>
            </div>
        </ul>
	</div>
   
   <script>
    $(".con_box").click(function(){
        $(this).find(".con_p").toggleClass("active");
        $(this).find("li").toggleClass("title_active");
        $(this).find(".jia").toggleClass("jiaact");

    })
</script>
<?php include template("content","myfoot"); ?>