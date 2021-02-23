
<!-- Baza -->
<?php include "../connections/server.php ";?>
<?php

    // Ako je korisnik admin dozvoljen mu je pristup ako nije vodi ga na login.
    

    if(array_key_exists('is_admin',$_SESSION) && $_SESSION['is_admin']) {
        include '../admin/dashboard.php'; 
    }else {
        include 'login/login.php';
    }
?>