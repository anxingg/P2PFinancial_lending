<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>borrow_Statistics</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/account.min.css">
   <!-- 引入jquery -->
   <script src="./lib/jqueryTemplate/jquery.js"></script>
  <!--获取登录用户是否登录-->
  <script src="./dist/js/loginState.min.js"></script>
  <script src="./lib/echarts/echarts-all.js"></script>
   
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("header.php");
       require_once("./menuNav.php")
    ?>
    <!-- 左侧导航 -->
    <div class="container" id="account">
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
          借款报表统计
        </h3>
      </div>
      <!-- body -->
      <div class="panel-body">
        <div  style="height:600px; width:100%" id="myecharts" >

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
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('myecharts')); 
        
        var option = {
    title : {
        text: '借款类型统计',
        subtext: '2018-09',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        data:[]
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:0, name:'信用贷'},
                {value:0, name:'车易贷'},
                {value:0, name:'房易贷'},
              
            ]
        }
    ]
};
                    
        // 为echarts对象加载数据 
        myChart.setOption(option); 
</script>
<script>
$.get("./api/borrow_Statistics.php",function(result){
  myChart.hideLoading();
  console.log(result);
  option.series[0].data=result.data;
  option.legend.data=result.title;
  //console.log(option.series[0].data);
  myChart.setOption(option); 
},"json")

</script>
</body>
</html>