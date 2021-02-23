<?php include_once 'server.php';
$_SESSION['username'] = "";
$_SESSION['id'] = "";
$_SESSION['first_name'] = "";
$_SESSION['last_name'] = "";
$_SESSION['phone_number'] = "";
header("Location: ../index.php");