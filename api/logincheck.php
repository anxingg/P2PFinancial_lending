<?php

$username=$_POST["username"];
$pwd=md5($_POST["password"]);

 require_once("./connDB.php");

 $sql="select * from userinfo where username='$username' and pwd='$pwd'";
$sql="select * from userinfo where username='$username' and pwd='$pwd'";

$rst=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($rst);

if($rs!=null){
   $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
   echo json_encode($rsArray);
}else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
    echo json_encode($rsArray);
}
?>