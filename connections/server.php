<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$servername = "localhost";
$username = "root";
$password = "";
$errors = array();
// Create connection
$db = mysqli_connect('localhost', 'root', '', 'bioskop');