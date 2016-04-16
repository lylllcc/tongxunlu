<?php
//数据库连接配置
function connect($con){
    $con = new mysqli("localhost","root","","adressbook");
    if($con->connect_error){
        die("connection error".$con->connect_error);
    }
    $con->set_charset("utf8");
    return $con;
}
