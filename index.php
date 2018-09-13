<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
  
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/index.min.css">

</head>
<body>
<!--header -->
<?php 
include_once("./header.php");
?>
<!-- 轮播 -->
<div class="container" >
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- 圆点 -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
   
  </ol>

  <!-- 图片 -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/banner01.jpg" alt="">
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="./images/banner02.jpg" alt="">
      <div class="carousel-caption"></div>
    </div>
  
  </div>

  <!-- 按钮 -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--投资理财  -->
  <!-- 投资信息 -->
  <div class="container">
        <div class="panel panel-default">
            <!-- 标题 -->
            <div class="panel-heading clearfix"> 
                <h2 class="pull-left">进行中借款</h2>
                <a class="pull-right" href="#">进入投资列表</a>
            </div>
            <!-- 内容表格 -->
            <table class="table table-hover hideTitle">
                <thead>
                    <tr>						
                    <th>借款人</th>
                    <th class="hideTitle">借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th>还款方式</th>
                    <th>进度</th>
                    <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>					
                    <td>张三</td>
                    <td class="hideTitle">给我2000度过难关</td>
                    <td>10.00%</td>
                    <td>2,000.00</td>
                    <td>按月分期还款</td>
                    <td>78.00%</td>
                    <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
                    </tr>
                    <tr>					
                    <td>李四</td>
                    <td class="hideTitle">给我2000度过难关</td>
                    <td>10.00%</td>
                    <td>2,000.00</td>
                    <td>按月分期还款</td>
                    <td>78.00%</td>
                    <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
                    </tr>
                </tbody>
                </table>
        </div>
    </div>

    <!-- 新闻文章 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">企业最新资讯</h2>
                    <a class="pull-right" href="#">更多咨询</a>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">用户反馈</h2>
                    <a class="pull-right" href="#">更多咨询</a>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">理财经验</h2>
                    <a class="pull-right" href="#">更多咨询</a>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">活动分享</h2>
                    <a class="pull-right" href="#">更多咨询</a>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                        <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

<!--footer -->
<?php 
include_once("./footer.php");
?>

  <!-- jquery.js -->
  <script src="./lib/jqueryTemplate/jquery.js"></script>
  <!-- bootstrap.js -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
 <script src="./src/js/index.js"></script>
</body>
</html>