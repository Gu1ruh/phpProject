<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$con = mysqli_connect('localhost','root','','user_data');
echo "Connected successfuly";

$sql = "INSERT into users(username,email,password)VALUES('$name', '$email', '$password');";
$result = mysqli_query($con, $sql);


if($result)
{
    header("location:index.php");
}
else
{
    echo "data not entered";
}

?> 