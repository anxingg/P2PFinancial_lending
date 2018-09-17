
<?php
    header("Content-Type:text/html;charset=utf-8");
    session_start();//开启会话
    
    if(isset($_SESSION["username"])){
       $username=$_SESSION["username"];
       $isArr=["isSuccess"=>true,"msg"=>"登录成功","username"=>$username];
       echo json_encode($isArr);
   }else{
    $isArr=["isSuccess"=>false,"msg"=>"请先登录在操作"];
    echo json_encode($isArr);
   } 
?>