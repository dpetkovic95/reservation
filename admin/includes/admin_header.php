<?php ob_start(); ?>
<!-- Baza -->
<?php include "../connections/server.php ";?>
<?php

    // Ako je korisnik admin dozvoljen mu je pristup ako nije vraca ga na pocetnu stranicu bioskopa
    
    if(!array_key_exists('is_admin',$_SESSION) || !$_SESSION['is_admin'] ){
       header("location:index.php");
    }
    
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Bioskopi </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>