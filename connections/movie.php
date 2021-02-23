<?php include_once 'server.php';

$sqldata = "SELECT * FROM movies ORDER BY created_at DESC LIMIT 3;";
$result = mysqli_query($db,$sqldata);

function getAllMovies($db){
    $sqldata = "SELECT * FROM movies ORDER BY title ASC;";
    return mysqli_query($db, $sqldata);
}

function getMovieById($db,$id) {
    $query = 'SELECT * FROM movies WHERE id = ' . $id . ';';
    return mysqli_query($db, $query);
}
?>
