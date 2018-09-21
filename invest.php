<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>invest</title>
     <!-- bootstrap.css -->
     <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/inveset.min.css">
    <link rel="stylesheet" href="./lib/jqueryPagination/jquery.pagination.css">
    <!-- jquery.js -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>
    
   
</head>
<body>
    <!-- header -->
    <?php 
    include_once("./header.php");
    include_once("./menuNav.php");
    ?>
<div class="container">
    <h4>投资列表</h4>
    <div class="row">
        <div class="col-sm-1 col-xs-3" id="state">
            <span>标的状态</span>
         </div>
    <div class="col-sm-10 col-xs-9">
    <div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-info">全部</button>
  <button type="button" class="btn btn-default">招标中</button>
  <button type="button" class="btn btn-warning">还款中</button>
</div>
    </div>
</div>
  <table class="table  table-hover ">
    <thead>
      <tr>
        <td>借款人</td>
        <td class="hideTitle">借款标题</td>
        <td>年利</td>
        <td>金额 </td>
        <td class="hideTitle">还款方式</td>
        <td>进度</td>
        <td>操作</td>
     </tr>  
  </thead>
  <!-- 内容 -->
  <tbody id="borrowAll"></tbody>
</table>
<!-- 分页插件 -->
    <div id="pagelist">
        <div id="page" ></div>
    </div>
</div>

     <!-- footer -->
    <?php 
     include_once("./footer.php")
     ?>
 
 <script src="./lib/jqueryTemplate/jqueryTmpl.js"></script>
<!-- 模板 -->
 <script id="tmpl" type="text/html">
    <tr>
        <td>${username}</td>
        <td class="hideTitle">${borrowTitle}</td>
        <td>${currentRate}</td>
        <td>${borrowAmount} </td>
        <td class="hideTitle">${repayment}</td>
        <td>100%</td>
        <td><button type="button" class="btn btn-danger">查看</button></td>
     </tr> 

</script>
<!-- bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="./dist/js/borrowAll.min.js"></script> -->
<script src="./dist/js/index.min.js"></script>
<script src="./lib/jqueryPagination/jquery.pagination-1.2.7.min.js"></script>
<script src="./lib/jqueryPagination/pagination.js"></script>

</body>
</html>