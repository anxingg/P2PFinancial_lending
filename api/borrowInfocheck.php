<?php
session_start();
$borrowType=$_POST["borrowType"];
$borrowAmount=$_POST["borrowAmount"];
$currentRate=$_POST["currentRate"];
$monthes2Return=$_POST["monthes2Return"];
$repayment=$_POST["repayment"];
$minAmount=$_POST["minAmount"];
$rewardAmount=$_POST["rewardAmount"];
$disableDays=$_POST["disableDays"];
$borrowTitle=$_POST["borrowTitle"];
$description=$_POST["description"];
$userid=$_SESSION["userid"];

if($borrowType=="t1"){
    $borrowType="信用贷";
}
if($borrowType=="t2"){
    $borrowType="车易贷";
}
if($borrowType=="t3"){
    $borrowType="房易贷";
}
//echo $borrowType.$borrowAmount.$currentRate.$monthes2Return.$repayment.$minAmount.$rewardAmount.$disableDays.$borrowTitle.$description.$userid;
require_once("./connDB.php");

$sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";

$rst=mysqli_query($conn,$sql);

if($rst){
    $isarr=["isSuccess"=>true,"msg"=>"恭喜你已经申请啦..."];
    echo json_encode($isarr);  
}else{
    $isarr=["isSuccess"=>false,"msg"=>"糟糕你未能申请成功.."];
    echo json_encode($isarr);  
}


?>