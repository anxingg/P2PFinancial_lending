//侧拉菜单
$(".visible-xs .btn").on("click",function(){
    $(".row-offcanvas").toggleClass("active");
 })

 //模拟手机触屏滑动事件
 var x1,y1,x2,y2;
 $(window).on("touchstart",function(e){
    x1=e.originalEvent.changedTouches[0].clientX;
    y1=e.originalEvent.changedTouches[0].clientY;
   
 }) 
 $(window).on("touchend",function(e){
    x2=e.originalEvent.changedTouches[0].clientX;
    y2=e.originalEvent.changedTouches[0].clientY;
    var dx=x2-x1;
    var dy=y2-y1;
    if(Math.abs(dx)>100){
        $(".visible-xs .btn").trigger("click");
    }
 })