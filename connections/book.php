<?php include 'server.php'; 

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $date= mysqli_real_escape_string($db, $_POST['date']);
    $time= mysqli_real_escape_string($db, $_POST['time']);

    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($phone)) { array_push($errors, "Phone number is required"); }
    if (empty($date)) { array_push($errors, "Date is required"); }
    if (empty($Time)) { array_push($errors, "Time is required"); }

    $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    $user_id = "SELECT id FROM users WHERE user"

    $query = "INSERT INTO reservations (user_id, repertoir_id, broj_karata) ";
    $query.="VALUES('','{$sadrzaj}','{$trajanje}','{$video}','{$zanr}','{$slika}','{$slika}') ";

}


?>