 <?php
if(isset($_POST['Enroll'])){
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
    VALUES ('$enroll','$name','$gende','$father','$phon','$address',current_timestamp());";
    echo $sql;
    if($con->query($sql)==true){
    echo "Successfully inserted";
    }
    else{
    echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}    
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="agi.jpg" alt="">
    <div class="container">
        <h1>Amarapali Group OF Institute</h1>
        <h4> Registration Form</h4>
        <p>Haldawni </p>

        <form action="index.php" method="post">
            <input type="int" name="enroll" id="enroll" placeholder="Enter Your Enroll Number">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="text" name="father" id="father" placeholder="Enter your Father name">
            <input type="text" name="phone" id="phone" placeholder="Enter your Phone number">
            <input type="text" name="address" id="address" placeholder="Enter your Address">
            <!-- <input type="text" name="Address" id="Address" placeholder="Enter your Address"> -->
            <button class="btn"> Sumbit</button>
            <button></button>
        </form>
        <script src="index.js"></script>
    </div>
</body>
</html>