<?php
  header("Content-Type:text/html;charset=utf-8");  
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == 'admin' && $pass=='admin'){
        echo "登录成功";
    }else{
        echo "登录失败";
    }
?>