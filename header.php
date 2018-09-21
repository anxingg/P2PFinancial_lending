<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
  <!-- jquery.js -->
  <script src="./lib/jqueryTemplate/jquery.js"></script>
</head>
<body>
 <!-- nav顶部导航 -->
 <nav class="navbar navbar-inverse">
  <div class="container">
    <!-- 按钮 -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active" id="homepage"><a href="index.php"> 首页</a></li>
       

      
        <li><a href="#">帮助</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="<img src='./images/contract.png'>" data-html="true">联系客服</a></li>
      </ul>
    </div>
  </div>
</nav>
<script>
  $.get("./api/userState.php",function(data){
    //console.log(data);
     if(data.isSuccess){
      var htmls=` <li><a href="#">${data.username}</a></li>
        <li><a href="recharge.php">赶快充值</a></li>
        <li><a href="loginOut.php">注销</a></li>`;
        $("#homepage").after(htmls);
    }else{
      var htmls=`<li><a href="login.php">登录</a></li>
        <li><a href="register.php">快速注册</a></li>
       `;
        $("#homepage").after(htmls);
    } 
  },"json")
</script>
</body>
</html>