<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personal</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/account.min.css">
   <!-- 引入jquery -->
   <script src="./lib/jqueryTemplate/jquery.js"></script>
      <!--获取登录用户是否登录-->
      <script src="./dist/js/loginState.min.js"></script>
   
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("header.php");
       require_once("./menuNav.php")
    ?>
    <!-- 左侧导航 -->
    <div class="container" id="account">
    <div class="row row-offcanvas row-offcanvas-left">
          
          <div class="col-sm-3 col-xs-6 sidebar-offcanvas" id="sidebar">
            <?php 
            require_once("personalNav.php");
            ?>
          </div>
        </div>
    </div>
    <!-- 右侧内容 -->
  <div class="col-sm-9 col-xs-12">
  <p class="pull-left visible-xs">
  <button type="button" class="btn btn-default btn-sm" data-toggle="offcanvas"><span class="glyphicon glyphicon-pencil"></span></button>
    </p>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title clearfix">
          <div class="personalPic pull-left">
            <img src="./images/head_icon.jpg">
          </div>
            <div class="pull-left personTitle">
            <p>昵 称：源代码教育</p>
            <p>用户名：小强</p>
            <p>最后登录时间：2016-10-25 15:30:10</p>
            </div>
        </h3>
      </div>
      <!-- body -->
      <div class="panel-body">
        <div class="row">
          <!-- first-line-left -->
          <div class="col-md-4">
          <p>总金额：<span>10000元</span> </p>
          </div>
          <!--  first-linemiddle -->
          <div class="col-md-4">
          <p>可用金额：<span>8000元</span> </p>
          </div>
          <!--  first-lineright -->
          <div class="col-md-4">
          <p>冻结金额：<span>2000元</span></p>
          </div>
        </div>
          <!-- sencond-->
          <p class="Rechargebtn">
            <button type="button" class="btn btn-primary">账户充值</button>
            <button type="button" class="btn btn-danger">账户提现</button>
          </p>
        <!-- three-->
        <div class="row">
            <!--three-line-left -->
          <div class="col-sm-4 col-xs-6">
            <div class="realName">
              <p>实名认证</p>
              <p>未认证 <a href="#">马上认证</a></p>
            </div>
          <p>实名认证之后才能在平台投资</p>
          </div>
          <!--  three-linemiddle -->
          <div class="col-sm-4 col-xs-6">
            <div class="Mobile">
                <p>手机认证</p>
                <p>已认证 <a href="#">查看</a></p>
            </div>
            <p>可以收到系统操作信息,并增加使用安全性</p>
          </div>
          <!--  three-lineright -->
          <div class="col-sm-4 col-xs-6">
            <div class="Email">
                <p>邮箱认证</p>
                <p>已认证 <a href="#">查看</a></p>
            </div>
            <p>您可以设置邮箱来接收重要信息</p>
          </div>
        
              <div class="col-sm-4 col-xs-6">
                <div class="VIP">
                    <p>VIP会员</p>
                    <p>普通用户<a href="#">查看</a></p>
                </div>
                <p>VIP会员，让你更快捷的投资</p>
              </div>
           
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

    <!-- 引入页脚 -->
     <?php
       require_once("footer.php");
    ?>

    <!-- 引入jquery -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>

    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
      <!-- 侧拉菜单 -->
      <script src="dist/js/sidebar.min.js"></script>

</body>
</html>