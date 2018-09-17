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
    <link rel="stylesheet" href="./dist/css/personal.min.css">
      <!-- 引入jquery -->
      <script src="./lib/jqueryTemplate/jquery.js"></script>
      <!--获取登录用户是否登录-->
      <script src="./dist/js/loginState.min.js"></script>
   
</head>
<body>
    <!-- 引入头部信息 -->
    <?php 
    require_once("./header.php");
    require_once("./menuNav.php");
    ?>
    <!-- 左侧导航 -->
     
      <div class="container" id="personal">
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
    个人资料
    </h3>
  </div>
  <div class="panel-body">
     <!-- 表单 -->
    
     <form class="form-horizontal">
            <!-- 个人以填信息 -->
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                <label for="name" class="col-sm-3 TL control-label username">xiaoq</label>
                </div>
            </div>
             <!-- 个人以填信息 -->
             <div class="form-group">
                <label for="realname" class="col-sm-3  control-label">真实姓名</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="realName">
                <!-- <label for="Fname" class="col-sm-3 TL control-label ">小强</label> -->
                </div>
            </div>
             <!-- 个人以填信息 -->
             <div class="form-group">
                <label for="identify" class="col-sm-3 control-label">证件号码</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="idcard" >
                <!-- <label for="idnum" class="col-sm-3 control-label">512************4646</label> -->
                </div>
            </div>

            <!-- 手机号码 -->
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">手机号码</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="phone" placeholder="输入你的手机号码">
                </div>
            </div>
            <!-- 联系电话 -->
            <div class="form-group">
                <label for="telNum" class="col-sm-3 control-label">联系电话</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="telNum" placeholder="联系电话">
                </div>
            </div>
            <!-- 个人学历 -->
            <div class="form-group">
                <label for="Education" class="col-sm-3 control-label" >个人学历</label>
                <div class="col-sm-9">
                <select class="form-control "  name="Education">
                    <option>初中</option>
                    <option>中专/高中</option>
                    <option>专科</option>
                    <option>本科</option>
                    <option>硕士研究生</option>
                    <option>博士研究生</option>
                </select>
                </div>
            </div>
             <!-- 个人收入 -->
             <div class="form-group">
                <label for="income" class="col-sm-3 control-label">个人收入</label>
                <div class="col-sm-9">
                <select class="form-control">
                    <option>1000元以下</option>
                    <option>1000元-1999元</option>
                    <option>2000元-2999元</option>
                    <option>3000-4999</option>
                    <option>5000-8999</option>
                    <option>10000</option>
                </select>
                </div>
            </div>
             <!-- 联系地址 -->
             <div class="form-group">
                <label for="telNum" class="col-sm-3 control-label">联系地址</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="telNum" placeholder="联系地址">
                </div>
            </div>
            <!-- 登录 -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">保存数据</button>
                </div>
            </div>
    </form>

  </div>
</div>
 </div>
    </div>
    </div>


    <!-- 引入页脚 -->
     <?php
       require_once("footer.php");
    ?>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
       <!-- 侧拉菜单 -->
       <script src="dist/js/sidebar.min.js"></script>
       <script>
     
     $(function(){
       $.get("./api/userState.php",function(data){
      $(".username").html(data.username);
     
       },"json");
     })

     

   </script>
</body>
</html>