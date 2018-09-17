<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/register.min.css">
    <!-- 验证样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.css">
</head>
<body>
    <!-- 顶部导航 -->
      <?php 
    include_once("./header.php");

  ?>
    <!-- nav主导航 -->
    <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header clearfix">
            <a class="navbar-brand class="pull-left"" href="#" >
            <img src="./images/logo.png">
            </a>
            <h2 class="pull-left" id="register">用户注册</h2>
        </div>  
    </div>
    </nav>

<div class="container">
<div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">用户注册</h3>
      </div>
      <div class="panel-body">
     <!-- 表单 -->
    <h2>请填写注册信息，点击“提交注册”即可完成注册！</h2>
    <form class="form-horizontal" id="regCheck"  method="post">
        <!-- 用户名 -->
  <div class="form-group">
    <label for="uesrname" class="col-sm-3 control-label">用户名</label>
    <div class="col-sm-9">
      <input type="text" name="username" class="form-control" id="username" placeholder="请输入你的昵称.....">
    </div>
  </div>
  <!-- 密码 -->
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label">密 码</label>
    <div class="col-sm-9">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="请输入你的密码...">
    </div>
  </div>
   <!-- 确认密码 -->
   <div class="form-group">
    <label for="repassword" class="col-sm-3 control-label">确认密码</label>
    <div class="col-sm-9">
      <input type="password" name="repassword" class="form-control" id="repwd" placeholder="请确认你的密码...">
    </div>
  </div>
 <!-- 手机号 -->
 <div class="form-group">
    <label for="mobile" class="col-sm-3 control-label">手机号</label>
    <div class="col-sm-9">
      <input type="text" name="mobile" class="form-control" id="mobile" placeholder="请输入你的手机号...">
    </div>
  </div>

 <!-- 邮箱 -->
 <div class="form-group">
    <label for="email" class="col-sm-3 control-label">邮&emsp;箱</label>
    <div class="col-sm-9">
      <input type="text" name="email" class="form-control" id="email" placeholder="请输入你的邮箱...">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Login in</button>
      <span><a href="login.php">已有账号，马上登录</a></span>
    </div>
  </div>
</form>

</div>
</div>

</div>
  <!-- 底部导航 -->
  <?php
    include_once("./footer.php");
    ?>

    <!-- jquery.js -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <!-- bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script> 
    <!-- 验证js -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.js"></script>  

    <script src="./dist/js/regcheck.min.js"></script>
</body>
</html>