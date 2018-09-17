<?php
$username=$_POST["username"];
$pwd=md5($_POST["password"]);
$mobile=$_POST["mobile"];
$email=$_POST["email"];


// 连接数据库
require_once("./connDB.php");

$sql="insert into userinfo(username,pwd,mobile,email) values('$username','$pwd','$mobile','$email')";

$rst=mysqli_query($conn,$sql);

if($rst){
    $isarr=["isSuccess"=>true,"msg"=>"恭喜你注册成功啦..."];
    echo json_encode($isarr);  
}else{
    $isarr=["isSuccess"=>false,"msg"=>"糟糕你注册未成功..."];
    echo json_encode($isarr);  
}
require_once("./release.php");
?>