<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personal</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/recharge.min.css">
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
    <div class="container" id="recharge">
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
      <div class="panel-heading" id="rechageHead">
      <div class="panel-title">
          <h2>账户充值</h2>
          <p>1. 由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</p>
          <p>2. 请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</p>
      </div>
      </div>
      <!-- body -->
      <div class="panel-body">
        <div class="row">
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
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                      <label for="bank" class="col-sm-3 control-label">银行</label>
                      <div class="col-sm-9">
                        <div class="input-group let">
                            <select class="form-control " name="cardType" id="borrowType">
                                <option value="t1" selected>工商银行62170038233428412750(府城大道支行)</option>
                                <option value="t2">农业银行6217003834411112750(成都天府新谷支行)</option>
                                <option value="t3">招商银行6212303810028412750(成都高新天府大道支行)</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <!-- 交易号 -->
                    <div class="form-group">
                      <label for="TradeNum" class="col-sm-3 control-label">交易号</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="TradeNum" >
                      </div>
                    </div>
                    <!-- 充值时间 -->
                    <div class="form-group">
                      <label for="time" class="col-sm-3 control-label">充值时间</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="time" >
                      </div>
                    </div>
                    <!-- 说明 -->
                    <div class="form-group">
                      <label for="Explain" class="col-sm-3 control-label">说明</label>
                      <div class="col-sm-9">
                      <textarea class="form-control" rows="3" name="description"></textarea>
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