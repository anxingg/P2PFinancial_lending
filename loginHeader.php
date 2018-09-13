<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loginHeader</title>
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/index.min.css">
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
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.php"> 首页</a></li>
        <li><a href="login.php">登录</a></li>
        <li><a href="register.php">快速注册</a></li>
        <li><a href="#">帮助</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- jquery.js -->
<script src="./lib/jqueryTemplate/jquery.js"></script>
<!-- bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>   
</body>
</html>