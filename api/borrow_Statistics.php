<?php
require_once("./connDB.php");
$sql="select * from borrowinfo";
$rst=mysqli_query($conn,$sql);
$dataArr=[
    ["value"=>0,"name"=>"信用贷"],
    ["value"=>0,"name"=>"车易贷"],
    ["value"=>0,"name"=>"房易贷"],
];
while($rs=mysqli_fetch_assoc($rst)){

    if($rs["borrowType"]=="信用贷"){
        $dataArr[0]["value"]+=$rs["borrowAmount"];
    }
    if($rs["borrowType"]=="车易贷"){
        $dataArr[1]["value"]+=$rs["borrowAmount"];
    }
    if($rs["borrowType"]=="房易贷"){
        $dataArr[2]["value"]+=$rs["borrowAmount"];
    }  
}
$title=['信用贷','车易贷','房易贷'];
$result=[
    "data"=> $dataArr,
    "title"=>$title
];
echo json_encode($result);
?>