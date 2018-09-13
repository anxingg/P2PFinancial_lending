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
   
</head>
<body>
    <!-- header -->
     <?php 
     include_once("./header.php")
     ?>
<div class="container">
    <h4>投资列表</h4>
    <div class="row">
        <div class="col-sm-1" id="state">
            <span>标的状态</span>
         </div>
    <div class="col-sm-3">
        <ul class="nav nav-pills" id="choose">
            <li role="presentation" class="active"><a href="#">全部</a></li>
            <li role="presentation"><a href="#">招标中</a></li>
            <li role="presentation"><a href="#">还款中</a></li>
        </ul>
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
  <tbody>
      <tr>
        <td> zs</td>
        <td class="hideTitle">给我2000度过难关</td>
        <td>10.00%</td>
        <td>2,000.00 </td>
        <td class="hideTitle">按月分期还款</td>
        <td>78.00%</td>
        <td><button type="button" class="btn btn-danger">查看</button></td>
     </tr>    
  </tbody>
  </table>
</div>

     <!-- footer -->
    <?php 
     include_once("./footer.php")
     ?>
 <!-- jquery.js -->
 <script src="./lib/jqueryTemplate/jquery.js"></script>
<!-- bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>