<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>borrow_list</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/borrow_list.min.css">
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
        <!-- head -->
      <div class="panel-heading" id="borrowTitle">
        <div class="panel-title clearfix">
          <h2>借款项目</h2>
       </div>
      </div>
      <!-- body -->
        <div class="panel-body">
            <div class="row">
                <table class="table table-striped">
                    <!-- 表格头部 -->
                    <thead>
                        <tr>
                            <th>标题</th>
                            <th>时间</th>
                            <th>借款金额(元)</th>
                            <th>期限</th>
                            <th>利率</th>
                            <th>状态</th>
                        </tr>
                    </thead>
                    <!-- 表格内容数据 -->
                    <tbody id="borrowData"></tbody>
                </table>
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
    <script src="./lib/jqueryTemplate/jqueryTmpl.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
      <!-- 侧拉菜单 -->
    <script src="dist/js/sidebar.min.js"></script>

    <!-- jquery tmpl模板 -->
    <script type="text/html" id="borrowTmpl">
        <tr>
            <td>${borrowTitle}</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
            </td>
        </tr>
    </script>
    <!-- 借款申请列表信息请求数据 -->
    <script src="./dist/js/borrow_list.min.js"></script>
  
</body>
</html>