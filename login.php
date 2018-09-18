<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/login.min.css">
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
            <h2 class="pull-left" id="register">用户登录</h2>
        </div>  
    </div>
    </nav>

<div class="container">
<div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">用户登录</h3>
      </div>
      <div class="panel-body">
     <!-- 表单 -->
    <h2>请输入用户名和密码</h2>
    <form class="form-horizontal" id="loginCheck"  method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">用&nbsp;&nbsp;户&nbsp;名</label>
    <div class="col-sm-9">
      <input type="text" name="username" class="form-control" id="username" placeholder="你的昵称.....">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">密 &emsp;码</label>
    <div class="col-sm-9">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="你的密码...">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
    <div class="col-sm-9">
      <input type="password" name="repassword" class="form-control" id="repwd" placeholder="再次输入你的密码...">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Login in</button>
      <span><a href="register.php">新用户，马上注册</a></span>
    </div>
  </div>
</form>

</div>
</div>

</div>

<!-- 蒙层 -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="loginModalTitle">TITLE</h4>
      </div>
      <div class="loginModalContent">
       内容
      </div>
      <div class="loginModelBody modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
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
    <script src="./dist/js/loginCheck.min.js"></script>
</body>
</html>