<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- nav主导航 -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img src="./images/logo.png">
      </a>
    </div>
    <!-- 主导航链接 -->
      <ul class="nav navbar-nav" id="mainNav"> 
        <li class="active"><a href="index.php?menuid=1">首页</a></li>
        <li><a href="invest.php?menuid=2">我要投资</a></li>
        <li><a href="borrow.php?menuid=3">我要借款</a></li>
        <li><a href="personal.php?menuid=4">个人中心</a></li>
        <li><a href="#">新手指引</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>   
  </div>
</nav>
 <!-- jquery.js -->
 <script src="./lib/jqueryTemplate/jquery.js"></script>
 <script>
   var url=location.href; 
  var id=url.split("=")[1];

   $("#mainNav li").removeClass("active").eq(id-1).addClass("active");
 </script>
</body>
</html>