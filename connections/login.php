<?php include_once 'server.php';
$payload = file_get_contents('php://input');
$input =json_decode($payload, true);

if (isset($input['username'])){

    $username = stripslashes($input['username']);
    $username = mysqli_real_escape_string($db,$username);

    $password = stripslashes($input['password']);
    $password = mysqli_real_escape_string($db,$password);

    $query = "SELECT * FROM users WHERE username='{$username}' and password ='" . md5($password) . "' ";

    $result = mysqli_query($db,$query) or die(mysql_error());
    $rows = mysqli_fetch_assoc($result);
        if($rows) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $rows['id'];
            $_SESSION['first_name'] = $rows['first_name'];
            $_SESSION['last_name'] = $rows['last_name'];
            $_SESSION['phone_number'] = $rows['phone_number'];
            echo json_encode(["success" => true]);
        }
        else {
            echo json_encode(["success" => false]);
        }
}

else{
    echo json_encode(["success" => false]);
}
?>