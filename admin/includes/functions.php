<?php
    function dodajFilm(){
        
        global $db;
        if(isset($_POST['submit'])){
            $naziv_filma = mysqli_real_escape_string($db,$_POST['naziv_filma']);
            // $org_naziv_filma = $_POST['org_naziv_filma'];
            $sadrzaj = mysqli_real_escape_string($db,$_POST['sadrzaj']);
            $zanr = $_POST['zanr'];
            $trajanje = $_POST['trajanje'];
            // $ocena = $_POST['ocena'];
            // $glumci = $_POST['glumci'];
            // $reziser = $_POST['reziser'];
            $slika = $_POST['slika'];
            $slika_v = $_POST['slika_vertikalna'];
            $video = $_POST['video'];
            
            
    
        
               if($naziv_filma == "" || empty($naziv_filma)){
                   echo "Obavezno polje";
               }
               else {
                   
                   $query = "INSERT INTO movies (title, description, duration, trailer, genre, image, image_vertical) ";
                   $query.="VALUES('{$naziv_filma}','{$sadrzaj}','{$trajanje}','{$video}','{$zanr}','{$slika}','{$slika}') ";
                   
                   $create_film_query = mysqli_query($db, $query);
                   var_dump($query);
                   if(!$create_film_query){
                       die("Query failed".mysql_error($db));
                   }
               }
           }  
    }
    

    function izbrisiFilm(){
        global $db;
        if(isset($_GET['delete'])){
                $del_film_id = $_GET['delete'];
                $query = "DELETE FROM movies WHERE id = {$del_film_id} ";
                $delete_query = mysqli_query($db, $query);
                //Mora da se refresh-uje strana
                header("Location: admo_filmovi.php");
            }
    }

    function tabelaFilmovi(){
        global $db;
        
        $query = "SELECT * FROM movies ";
        $select_all_filmovi_query = mysqli_query ($db, $query);
        
        while($row = mysqli_fetch_assoc($select_all_filmovi_query)){
            $film_id = $row['id'];
            $film_naslov = $row['title'];
            // $film_naslov_org = "";
            $film_sadrzaj = $row['description'];
            $film_zanr = $row['genre'];
            $film_trajanje = $row['duration'];
            // $film_ocena = "";
            // $film_glumci = "";
            // $film_reziser = "";
            $film_slika = $row['image'];
            $film_slika_vertikalna = $row['image_vertical'];
            $film_video = $row['trailer'];
            
            
            echo "<tr>";
            echo "<td>{$film_id} </td>";
            echo "<td>{$film_naslov} </td>";
            // echo "<td>{$film_naslov_org} </td>";
            echo "<td>{$film_sadrzaj} </td>";
            echo "<td>{$film_zanr} </td>";
            echo "<td>{$film_trajanje} </td>";
            // echo "<td>{$film_ocena} </td>";
            // echo "<td>{$film_glumci} </td>";
            // echo "<td>{$film_reziser} </td>";
            echo "<td><img width='100' src='../assets/images/$film_slika' alt= 'slika' ></td>";
            echo "<td><img width='100' src='../assets/images/$film_slika_vertikalna' alt= 'slika_vertikalna' ></td>";
            echo "<td>{$film_video} </td>";
            echo "<td><a href='admin_filmovi.php?delete={$film_id}'>Izbriši</a></td>";
            echo "</tr>";
            
        }
    }

function tabelaUsers(){
        global $db;
        
        $query = "SELECT * FROM users ";
        $select_all_users_query = mysqli_query ($db, $query);
        
        while($row = mysqli_fetch_assoc($select_all_users_query)){
            $user_id = $row['id'];
            $ime = $row['first_name'];
            $prezime = $row['last_name'];
            $username = $row['username'];
            $email = $row['email'];
            $pristup = $row['is_admin'];
            
            
            
            echo "<tr>";
            echo "<td>{$user_id} </td>";
            echo "<td>{$ime} </td>";
            echo "<td>{$prezime} </td>";
            echo "<td>{$username} </td>";
            echo "<td>{$email} </td>";
            echo "<td>{$pristup} </td>";
            
            echo "<td><a href='admin_users.php?change={$user_id}'>Promeni pristup</a></td>";
            echo "</tr>";
            
        }
    }
function promeniPristup(){
        global $db;
        if(isset($_GET['change'])){
                $change_user_id = $_GET['change'];
                
                $query = "UPDATE users 
                SET is_admin = CASE 
                WHEN is_admin = '1' THEN '0' 
                WHEN is_admin = '0' THEN '1'
                ELSE is_admin
                END
                WHERE id = {$change_user_id} ";
               
                $change_query = mysqli_query($db, $query);
                //Mora da se refresh-uje strana
                header("Location: admin_users.php");
            }
        
}
function loginAdmin() {
    global $db;

    if (isset($_POST['username'])){

    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($db,$username);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($db,$password);

    $query = "SELECT * FROM users WHERE username='{$username}' and password ='" . md5($password) . "' and is_admin=1";
    
    $result = mysqli_query($db,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

        if($rows) {
            $_SESSION['username'] = $username;
            $_SESSION['is_admin'] = true;
            header("Location: index.php");
        }
}

}



function listaProjekcija(){
    global $db;
    
    $query = "SELECT repertoire.id,movies.title,repertoire.date_time,repertoire.num_of_free_seats FROM `repertoire`INNER JOIN movies ON repertoire.movie_id = movies.id";
    $select_all_users_query = mysqli_query ($db, $query);
    
    
    while($row = mysqli_fetch_assoc($select_all_users_query)){
        $repertoire_id = $row['id'];
        $repertoire_title = $row['title'];
     
        $dateTime = date('Y/m/d H:i', $row['date_time']);
        $numOfSeats = $row['num_of_free_seats'];
        
        
        
        echo "<tr>";
        echo "<td>{$repertoire_id} </td>";
        echo "<td>{$repertoire_title} </td>";
        echo "<td>{$dateTime} </td>";
        echo "<td>{$numOfSeats} </td>";
        
    }
}

function getIdIIme() {
    global $db;

    $query = "SELECT id, title FROM movies";
    $select_all_titles_and_id_query = mysqli_query ($db, $query);

    return $select_all_titles_and_id_query;
    
}

function dodajProjekciju() {
  global $db;

if($inputJSON = file_get_contents('php://input')){
    $input = json_decode($inputJSON, TRUE);
    if(isset($input['movie']) && isset($input['date'])){
        $date = new DateTime($input['date']);
        
        $query = "INSERT INTO repertoire (movie_id,date_time) ";
        $query.= "VALUES('{$input['movie']}','{$date->getTimestamp()}') ";
        $create_query = mysqli_query($db,$query);
    }
    else{
        echo json_encode(["success" => false]);
    }
}
}

function listReservations() {
    global $db;

    $query = "SELECT users.first_name, users.last_name, users.email, users.phone_number, repertoire.date_time, reservations.broj_karata, movies.title
    FROM reservations LEFT JOIN users ON reservations.user_id = users.id LEFT JOIN repertoire ON reservations.repertoar_id = repertoire.id
    LEFT JOIN movies ON repertoire.movie_id = movies.id";

    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $date = date('Y/m/d H:i', $row['date_time']);
        echo "<tr>";
        echo "<td>{$row['first_name']} </td>";
        echo "<td>{$row['last_name']} </td>";
        echo "<td>{$row['email']} </td>";
        echo "<td>{$row['phone_number']} </td>";
        echo "<td>{$date} </td>";
        echo "<td>{$row['broj_karata']} </td>";
        echo "<td>{$row['title']} </td>";
    }
    
}