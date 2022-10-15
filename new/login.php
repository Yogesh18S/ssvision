<?php
if(isset($_POST['id'])){
    $server="localhost";
    $username="root";
    $passward="";
    $con=mysqli_connect($server,$username,$passward);
    if(!$con){
    die("connection to this database failed due to".mysqli_connect_error())
}
    $eid=$_POST['id'];
    $passward=$_POST['passward'];
    $sql= "INSERT INTO `ss`.`ss`(`id`, `password`) VALUES ('$eid','$passward')";
    echo $sql;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="login.css">
    <img class="bg" src="ss1.jpg" alt="">
</head>
<body>
    <div class="container">
        <h1>SS VISION PHOTOGRAPHY AND FILMS</h1>
        <h2>Login </h2>
        <form action="login.php" method="post">
            <input type="text" name="Id" id="id" placeholder="Enter your Id">
            <input type="text" name="Passward" id="Passward" placeholder="Enter your Passward">
            <button class="btn">Sumbit</button>
        </form>
    </div>
</body>
</html>