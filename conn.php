<?php
header("Content-type: text/html; charset=utf-8");
$con = new mysqli("localhost","root","","adressbook");
if($con->connect_error){
    die("connection error".$con->connect_error);
}
$con->set_charset("utf8");
$query = "SELECT * FROM adressbook WHERE department LIKE '%".$_REQUEST["department"]."%'";
$result = $con->query($query);
var_dump($result);
echo $_REQUEST['department'];
while($row  = $result->fetch_assoc()){
    echo $row['department']." ".$row['position']." ".$row['telephone'].'<br>';
}