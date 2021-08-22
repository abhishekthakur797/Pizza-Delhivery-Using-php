<?php
# session must be started once in every page
session_start();
# the below function will destroy all running sessions in application
session_destroy();
# redirect to login page
header("Location:homepage.php");

?>