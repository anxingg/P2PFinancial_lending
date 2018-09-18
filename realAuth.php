<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>realAuth</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/realAuth.min.css">

    <!-- 验证样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.css">
    <!-- 引入jquery -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>
      <!--获取登录用户是否登录-->
    <script src="./dist/js/loginState.min.js"></script>
   
   
</head>
<body>
    <!-- 引入头部信息 -->
  <?php 
    include_once("./header.php");
    include_once("./menuNav.php");
?>
    <!-- 左侧导航 -->
    <div class="container" id="realAuth">
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
        <h3 class="panel-title clearfix">实名认证</h3>
      </div>
      <!-- body -->
      <div class="panel-body">
        <p class="warnning">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
         <!-- form -->
          
         <form class="form-horizontal" id="AccountInfo" method="post">
          <!-- 用户名 -->
          <div class="form-group">
            <label for="Fname" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-9" id="Fname">
            <label for="Fname" class="col-sm-3 control-label FN" name="username">小强</label>
            </div>
          </div>
          <!-- 姓名 -->
          <div class="form-group">
            <label for="username" class="col-sm-3 control-label">姓&emsp;名</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="realname" >
            </div>
          </div>
          <!-- 性别 -->
          <div class="form-group">
            <label for="time" class="col-sm-3 control-label">性&emsp;别</label>
            <div class="col-sm-9">
              <select class="form-control"  name="sex">
                    <option selected>男</option>
                    <option>女</option>
              </select>
            </div>
          </div>
          <!-- 证件类型 -->
          <div class="form-group">
            <label for="cardKind" class="col-sm-3 control-label">证件类型</label>
            <div class="col-sm-9">
            <select class="form-control"  name="cardKind">
                    <option selected>身份证</option>
                    <option>驾驶证</option>
                    <option>军官证</option>
                </select>
            </div>
          </div>
           <!-- 证件号码 -->
           <div class="form-group">
            <label for="cardNum" class="col-sm-3 control-label">证件号码</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="cardNum" >
            </div>
          </div>
           <!-- 出生日期 -->
           <div class="form-group">
            <label for="born" class="col-sm-3 control-label">出生日期</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="born" >
            </div>
          </div>
          <!--证件地址 -->
          <div class="form-group">
            <label for="address" class="col-sm-3 control-label">证件地址</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="address" >
            </div>
          </div>
          <!-- 说明 -->
          <div class="form-group">
            <label for="IDphoto" class="col-sm-3 control-label">身份证照片</label>
            <span class="Tips">请点击“选择图片”,选择证件的正反两面照片。</sapn>
            <div class="col-sm-9 clearfix">
              <div class="upload pull-left "id="pic1">
                  <a href="#">上传正面        
                   <input class="change" type="file"   id="imagefile1" name="photo1"/>
                   <span id="img1"></span>
                  </a>
                
              </div>
              
              <div class="upload pull-left " id="pic2">
                  <a href="#">上传反面 <input class="change" type="file" name="photo2" id="imagefile2" />
                  <span id="img2"></span></a>
              </div>
              <div class="pull-right  temp "><a href="#">查看样板</a></div>
            </div>
          </div>
          <!-- 提交 -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-info">确认提交</button>
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

    <!-- 引入jquery -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>

    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <!-- 侧拉菜单 -->
    <script src="dist/js/sidebar.min.js"></script>
    <script src="./lib/jqueryTemplate/jqueryTmpl.js"></script>
    <script>
     //获取用户姓名
      $(function(){
        $.get("./api/userState.php",function(data){
       $(".FN").html(data.username);
      
        },"json");
      })
    

    </script>
   
  <script src="./dist/js/showPIC.min.js"></script>
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.js"></script>  
    <!-- 账户信息格式检查 -->
  <script src="./dist/js/AccountInfoCheck.min.js">


</script>
</body>
</html>