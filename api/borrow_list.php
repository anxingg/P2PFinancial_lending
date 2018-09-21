<?php
require_once("./connDB.php");
session_start();//开启会话
$userid=$_SESSION["userid"];//获取当前用户id
$sql="select * from borrowinfo where userid=$userid";//查询当前用户的借款信息
$result=mysqli_query($conn,$sql);

 while($rs=mysqli_fetch_assoc($result)){
    //   array_push($borrowArr,$rs);//方式一
      $borrowArr[]=$rs;   //方式二
    } 
    echo json_encode($borrowArr);
?>
  