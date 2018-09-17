<?php

$username=$_POST["username"];
$pwd=md5($_POST["password"]);

 require_once("./connDB.php");

 $sql="select * from userinfo where username='$username' and pwd='$pwd'";

$rst=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($rst);

if($rs!=null){
    session_start();//开启会话
    $_SESSION["username"]=$rs['username'];//创建session当前用户
    $_SESSION["userid"]=$rs['userid'];//创建session当前用户的id
    $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
    echo json_encode($rsArray);
}else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
    echo json_encode($rsArray);
}
//require_once("./release.php");
?>