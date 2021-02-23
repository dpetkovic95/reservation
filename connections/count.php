<?php   
$query = "SELECT * FROM users";
$result = mysqli_query($db,$query) or die(mysql_error());
$user_rows = mysqli_num_rows($result);

$query = "SELECT * FROM movies";
$result = mysqli_query($db,$query) or die(mysqli_error());
$movie_rows = mysqli_num_rows($result);
