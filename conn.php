<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>通讯录</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1><strong>中国石油大学(华东)通讯录</strong></h1><br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal" id="record">
                <div class="form-group">
                    <?php
//                    header("Content-type: text/html; charset=utf-8");
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
                    ?>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <p>Powered by upcyiban</p>
        </footer>
    </div>
</div>

</body>
</html>
