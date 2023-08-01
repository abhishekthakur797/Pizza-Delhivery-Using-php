<?php

$link = mysqli_connect("localhost", "root", "", "pizza");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phoneNumber = mysqli_real_escape_string($link, $_REQUEST['phoneNumber']);
$feedback = mysqli_real_escape_string($link, $_REQUEST['feedback']);
 
$sql = "INSERT INTO person (first_name, last_name, email, phoneNumber, feedback) VALUES ('$first_name', '$last_name', '$email', '$phoneNumber', '$feedback')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>