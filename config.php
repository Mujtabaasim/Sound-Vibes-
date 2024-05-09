<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // Replace 'your_mysql_username' with your actual MySQL username
define('DB_PASSWORD', ''); // Replace 'your_mysql_password' with your actual MySQL password
define('DB_NAME', 'sound_vibes_hub'); // Replace 'sound_vibes_hub' with the name of your actual database

/* Attempt to connect to MySQL database */
$link = mysqli_connect("localhost", "root","" , "sound_vibes_hub");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
