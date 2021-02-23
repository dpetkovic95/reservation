<?php
include_once '../connections/server.php';
session_start();
session_destroy();
// $_SESSION['ime'] = null;
// $_SESSION['prezime'] = null;
// $_SESSION['email'] = null;
// $_SESSION['access'] = null;

header("Location: ../index.php");

?>