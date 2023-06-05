<?php   
session_start();
if(!isset($_SESSION['user'])) header('location: index.php');
session_unset();
session_destroy();




?>