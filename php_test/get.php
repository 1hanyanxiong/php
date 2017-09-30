<?php
header("Content-Type:text/html;charset=utf-8");
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $S = '我的名字'.$user.'我的密码'.$pass;
    echo $S ;
?>