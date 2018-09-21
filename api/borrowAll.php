<?php
 header("Content-Type:text/html;charset=utf-8");
    require_once("./connDB.php");
    $pageIndex=$_GET["pageIndex"];//页数
    $pageSize=$_GET["pageSize"];//显示数据条数

    $sql="select borrowinfo.*,userinfo.username from borrowinfo left join userinfo on borrowinfo.userid=userinfo.userid";
    $rst=mysqli_query($conn,$sql);//计算总数据条数

    $total=mysqli_num_rows($rst);  //总条数
    $skipNum=$pageIndex*$pageSize;//跳过的数据条数

    $sql.=" limit $skipNum,$pageSize";
    $rst=mysqli_query($conn,$sql);

    while($rs=mysqli_fetch_assoc($rst)){
        $borrowArr[]=$rs;
    }
   $result=[
       "total"=> $total,
       "data"=>$borrowArr
   ];
   echo json_encode($result);

?>