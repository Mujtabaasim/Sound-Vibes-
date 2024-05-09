<?php

$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$connect=mysqli_connect("localhost","root","","sound_vibes_hub");
$query="INSERT INTO signup_table(username,name,email,password)
 VALUES ('$username','$name','$email','$password')";
$sql=mysqli_query($connect,$query);
?>