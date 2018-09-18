<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>borrow_apply</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/borrow-apply.min.css">
   <!-- 引入jquery -->
   <script src="./lib/jqueryTemplate/jquery.js"></script>
  <!--获取登录用户是否登录-->
  <script src="./dist/js/loginState.min.js"></script>
  <!-- 验证样式 -->
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.css">
   
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("header.php");
       require_once("./menuNav.php")
    ?>
    <!-- 左侧导航 -->
    <div class="container" id="borrow">
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
    <div class="panel panel-default" id="rigtitle">
      <div class="panel-heading" id="borrowTitle">
        <div class="panel-title clearfix">
          <h2>信用借款</h2>
          <p>授信额度：<span>2000</span>     可借金额：<span>2000</span></p>
       </div>
      </div>
      <div class="borrowMsg">
           <span>借款信息</span><button type="button" class="btn btn-primary btn-sm">信用标</button>
       </div>
      <!-- body -->
        <div class="panel-body">
                <div class="row">
                    <form class="form-horizontal" id="borrow-apply"  method="post">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">借款类型</label>
                            <div class="col-sm-9">
                                <div class="input-group let">
                                    <select class="form-control " name="borrowType">
                                        <option value="t1">信用贷</option>
                                        <option value="t2">车易贷</option>
                                        <option value="t3">房易贷</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">借款金额</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="borrowAmount">
                                    <span class="input-group-addon" id="basic-addon2">元</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">借款利息</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="currentRate">
                                    <span class="input-group-addon" id="basic-addon2">%</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">借款期限</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                <select class="form-control" name="monthes2Return">
                                    <option>1</option>
                                    <option>3</option>
                                    <option>6</option>
                                    <option>9</option>
                                    <option>12</option>
                                    <option>24</option>
                                </select>
                                    <span class="input-group-addon" id="basic-addon2">月</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">还款方式</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="radio"   name="repayment" value="按月分期" checked>按月分期
                                    <input type="radio"  name="repayment" value="按月到期">按月到期
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">最小投标</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="minAmount">
                                    <span class="input-group-addon" id="basic-addon2">元</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">投标奖金</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="rewardAmount">
                                    <span class="input-group-addon" id="basic-addon2">%</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">投标天数</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                <select class="form-control"name="disableDays">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                    <span class="input-group-addon" id="basic-addon2">天</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">借款标题</label>
                            <div class="col-sm-9">
                            <input type="text"  class="form-control"  name="borrowTitle">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">借款描述</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">提交申请</button>
                        
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
    <!-- 借款申请信息格式检查 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.js"></script>  
    <!-- 验证申请格式 -->
    <script src="./dist/js/borrowcheck.min.js"></script>  
</body>
</html>