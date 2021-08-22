<?php
# session start
session_start();

# database connection code using mysqli lib
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pizza';
$connection = mysqli_connect($host,$username,$password,$dbname) or die("Unable to connect MYSQL Server ERROR: ".mysqli_error($connection));

//var_dump($connection);




?>