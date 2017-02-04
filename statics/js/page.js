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




    


})