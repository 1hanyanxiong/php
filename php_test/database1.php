<?php
     header("Content-Type:text/html;charset=utf-8");
     //1.连接数据库 (mysql mysqli pdo)
     $conn = new mysqli('localhost','root','123','phpdata_base');
     //2.编写sql
     $res = $conn->query('select * from users');
     //3.取出来
     while($row=$res->fetch_row()){
         echo '名字:'.$row[0].',密码'.$row[1].'<br/>';
     }
    
     
?>