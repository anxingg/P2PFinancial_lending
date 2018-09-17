//检测用户是否登录
$.get("./api/userState.php",function(data){
    //var data=JSON.parse(data);
    console.log(data.msg);
     if(!data.isSuccess){
        alert(data.msg);
        location.href="./login.php";
    }  
},"json");