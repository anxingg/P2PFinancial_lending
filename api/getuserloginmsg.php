<?php
session_start();
$userid=$_SESSION["userid"];
require_once("connDB.php");
$sql="select * from userinfo where userid=$userid";
$rst=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($rst);
  echo json_encode($rs);

?>