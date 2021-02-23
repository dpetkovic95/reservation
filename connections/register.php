<?php 
include_once 'server.php'
?>

<?php 

// REGISTER USER
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password_2= mysqli_real_escape_string($db, $_POST['password_2']);

    if (empty($first_name)) { array_push($errors, "First name is required"); }
    if (empty($last_name)) { array_push($errors, "Last name is required"); }
    if (empty($phone_number)) { array_push($errors, "Phone number is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if ($password != $password_2) {
        array_push($errors, "Passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already in use");
        }
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO users (first_name,last_name,phone_number,username, email, password)
                  VALUES('$first_name','$last_name','$phone_number','$username','$email','$password')";
        mysqli_query($db, $query);
    
        ?>
        <script>
            var is_successful = confirm("Uspesna registracija");
            if (is_successful) {
                window.location.href = "../index.php";
            }
        </script>
        <?php  
        // header('location: ../index.php');
    }

}
?>
