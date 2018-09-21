<?php 
require_once("connDB.php");
session_start();
$userid=$_SESSION["userid"];
$realname=$_POST["realname"];
$sex=$_POST["sex"];
$idcardkinds=$_POST["idcardkinds"];
$idcard=$_POST["idcard"];
$born=$_POST["born"];
$address=$_POST["address"];
$phototop=$_POST["phototop"];
$photobottom=$_POST["photobottom"];
$sql="update userinfo set realname='".$realname."', sex='".$sex."',idcard='".$idcard."', idcardkinds='".$idcardkinds."', born='".$born."',idphototop='".$phototop."',idphotobottom='".$photobottom."', address='".$address."' where userid=".$userid;
//echo $sql;
  $rst=mysqli_query($conn,$sql);


 if($rst){
$arr=["isSuccess"=>true,"msg"=>"个人信息已完善"];
    echo json_encode($arr);
}else{
    $arr=["isSuccess"=>false,"msg"=>"个人信息完善失败"];
    echo json_encode($arr);
}   

?>