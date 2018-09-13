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
   
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("header.php");
    ?>

    <!-- 左侧导航 -->
    <div class="container" id="personal">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
             <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       投资项目
                         </a>
                    </h4>
                </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">投资项目</div>
    </div>
  </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        借款项目
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       <p><a href="#">借款项目</a></p>
       <p><a href="#">还款明细</a></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         我的账户</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <p><a href="#">账户信息</a></p>
        <p><a href="#">实名认证</a></p>
        <p><a href="#">银行卡管理</a></p>
        <p><a href="#">登录记录</a></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                       资产详情
                         </a>
                    </h4>
                </div>
            <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">
        <p><a href="#">账户流水</a></p>
        <p><a href="#">充值明细</a></p>
        <p><a href="#">提现记录</a></p>
        <p><a href="#">收款明细</a></p>
      </div>
    </div>
  </div>
</div>
</div>

    <!-- 右侧内容 -->
 <div class="col-sm-9 col-xs-12">
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
        <div class="personTitle">
        <p>昵 称：源代码教育</p>
        <p>用户名：小强</p>
        <p>最后登录时间：2016-10-25 15:30:10</p>
        </div>
    </h3>
  </div>
  <div class="panel-body">
    Panel content
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
    <script src="./src/js/index.js"></script>

</body>
</html>