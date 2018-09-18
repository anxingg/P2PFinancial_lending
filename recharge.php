<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/recharge.min.css">
    <!-- 验证样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.css">
    <!-- 引入jquery -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>
      <!--获取登录用户是否登录-->
      <script src="./dist/js/loginState.min.js"></script>
   
</head>
<body>
    <!-- 顶部导航 -->
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
        <li><a href="login.php">sirius</a></li>
        <li><a href="recharge.php">账户充值</a></li>
        <li><a href="#">注销</a></li>
        <li><a href="#">帮助</a></li>
      </ul>
    </div>
  </div>
</nav>
    <!-- nav主导航 -->
    <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header clearfix">
            <a class="navbar-brand class="pull-left"" href="#" >
            <img src="./images/logo.png">
            </a>
            <h2 class="pull-left" id="account">账户充值</h2>
        </div>  
    </div>
    </nav>

<div class="container">
  <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">
          <h2>账户充值</h2>
          <p>1. 由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</p>
          <p>2. 请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</p>
        </h3>
      </div>
     
  </div>
</div>

  <div class="container">

  <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
    <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li role="presentation" class=""><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">线上充值(第三方平台)</a></li>
      <li role="presentation" class="active"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">线下充值</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade online" id="home" aria-labelledby="home-tab">
        <h2>系统暂不支持，请采用线下充值</h2>
      </div>
      <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab">
       <!-- 线下充值 -->
       <div class="bs-example" data-example-id="striped-table">
          <table class="table table-striped">
            <thead>
              <tr>
                <th >银行名称</th>
                <th>开户人姓名</th>
                <th>银行帐号</th>
                <th>开户行支行名称</th>
              </tr>
            </thead>
            <tbody>
              <tr>		
                <th ><span class="ICBC"></span></th>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>府城大道支行</td>
              </tr>
              <tr>		
                <th ><span class="AB"></span></th>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>成都天府新谷支行</td>
              </tr>
              <tr>		
                <th><span class="CMB"></span></th>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>成都高新天府大道支行</td>
              </tr>
            </tbody>
          </table>
          <div class="Tips">
          <P>第一步:</P>
          <P>请选择往以上一个账号汇款或转账您所要充值的金额（若您是跨行转账，推荐选择建行）。注：请保存您的交易记录信息。</P>
          <P>第二步:</P>
          <P>款或转账成功后，再选择你所汇款或转账的账号，并填写以下完整的信息后，提交您的线下充值申请。我们将会在下个工作日核对您的申请。</P>
          </div>
          <!-- 表单 -->
      <form class="form-horizontal">
          <div class="form-group">
            <label for="bank" class="col-sm-2 control-label">银行</label>
            <div class="col-sm-10">
            <select class="form-control"  name="bank">
                    <option>工商银行62170038233428412750(府城大道支行)</option>
                    <option>农业银行6217003834411112750(成都天府新谷支行)</option>
                    <option>招商银行6212303810028412750(成都高新天府大道支行)</option>
                </select>
            </div>
          </div>
          <!-- 交易号 -->
          <div class="form-group">
            <label for="TradeNum" class="col-sm-2 control-label">交易号</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="TradeNum" >
            </div>
          </div>
          <!-- 充值时间 -->
          <div class="form-group">
            <label for="time" class="col-sm-2 control-label">充值时间</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="time" >
            </div>
          </div>
          <!-- 说明 -->
          <div class="form-group">
            <label for="Explain" class="col-sm-2 control-label">说明</label>
            <div class="col-sm-9">
              <textarea cols="78" rows="3"></textarea>
            </div>
          </div>
          <!-- 提交 -->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-info">确认提交</button>
            </div>
          </div>
      </form>
      </div>
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
    <!-- bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>  
     <!-- 验证js -->
     <script src="./lib/bootstrapValidator/js/bootstrapValidator.js"></script>  
    <script src="./src/js/loginCheck.js"></script>
</body>
</html>