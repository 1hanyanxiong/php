<?php
     header("Content-Type:text/html;charset=utf-8");
     //1.连接数据库 (mysql mysqli pdo)
     $conn = new mysqli('localhost','root','123','phpdata_base');
     //2.编写sql
     $res = $conn->query('select * from users');
     //3.取出来
     $row = $res->fetch_row();
     echo $row[1];
     $res->free();
     $conn->close();
?>