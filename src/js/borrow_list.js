
//借款申请列表
$(function(){
    $.get("./api/borrow_list.php",function(data){
        var htmls=$("#borrowTmpl").tmpl(data);//获取是数据，
        $("#borrowData").html(htmls);       //渲染模板生成dom
     },"json");
})