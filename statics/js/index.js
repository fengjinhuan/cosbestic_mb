$(function(){
var designWidth=640;
var fontSize=100;
window.onresize=aa;
function aa() {
    var nowWidth=document.documentElement.clientWidth;
    var nowSize=nowWidth*fontSize/designWidth;
    var cc= document.getElementsByTagName("html")[0].style.fontSize=nowSize+"px";
    console.log(cc)    }
aa();

var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    slidesPerView: 1,
    paginationClickable: true,
    loop: true
});
var totop=document.querySelector(".totop");
totop.onclick=function () {
    document.body.scrollTop=0;
};
window.onscroll=function () {
    var z=document.body.scrollTop;
    if(z>=window.innerHeight/2){
        totop.style.display="block";
    }else{
        totop.style.display="none";
    };
 };

$(".nav_box").click(function (e) {
    e.stopPropagation();
   $(".nav_shows").css({x:-500,display:"block"}).animate({x:0,opacity:0.9},1000);
    $(this).animate({scale:0,opacity:0},1000);
    $(".nav_close").animate({opacity:1,scale:1},1500)
    $(".c1").removeClass("c11");
    $(".c2").removeClass("c22");
});
$("body").click(function () {
    $(".nav_shows").animate({x:-500,opacity:0},1000);
    $(".nav_box").animate({scale:1,opacity:1},1000);
    $(".c1").addClass("c11");
    $(".c2").addClass("c22");
    $(".nav_close").delay(700).animate({scale:0,opacity:0})
});
$(".nav_shows").click(function (e) {
    e.stopPropagation();
});
$(".nav_close").click(function (e) {
    // e.stopPropagation()
    $(".c1").toggleClass("c11");
    $(".c2").toggleClass("c22");
    $(this).delay(700).animate({scale:0,opacity:0})
});




})