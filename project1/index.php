<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
// php mysql password is none or blank like above shown 


$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection is failed".mysqli_connect_error());
}
//echo "connected";// for checking only

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$desc=$_POST['desc'];

$sql= "INSERT INTO `travel`.`travel` ( `name`, `age`, `gender`, `phone`, `email`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$phone', '$email', '$desc', current_timestamp());"; 

if($con->query($sql)==true){
    echo "Inserted data";
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveling consltation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="bg.jpg" alt="image" class="bg">
        <h1>welcome to our website</h1>
        <p>Enter the your details for traveling consltation</p>
        <form action="index.php" method="post">
            <label for="name">Name: </label>
            <input type="text" id="name" placeholder="enter your name">
            <br>
            <label for="age">Age: </label>
            <input type="text" id="age" placeholder="enter your age">
            <br>
            <label for="gender">Sex: </label>
            <input type="text" id="gender" placeholder="enter your gender male ,female or other">
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="enter your email">
            <br>
            <label for="phone">Phone: </label>
            <input type="number" id="phone" placeholder="enter your phone number" maxlength="10">
            <br>
            <label for="questions">Questions</label>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter your questions"></textarea>
            <button  class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>