<?php
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    $enroll=$_POST['enroll'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $father=$_POST['father'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $sql= "INSERT INTO `agi`.`agi`(`enroll`,`name`,`gender`,`father`,`phone`,`address`) 
    VALUES ('$enroll','$name','$gender','$father','$phone','$address',current_timestamp());";
    echo $sql;
    
    ?>
    