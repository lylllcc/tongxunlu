<?php
$con = new mysqli("localhost","root","","adressbook");
if($con->connect_error){
    die("connection error".$con->connect_error);
}
$con->set_charset("utf8");
@$spr = mb_str_split($_REQUEST['department']);//分解传来的搜索
$spr = join("%",$spr);
$spr = "'%".$spr."%'";