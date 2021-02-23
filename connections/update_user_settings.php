<?php include_once 'server.php';

//Update user info

if($inputJSON = file_get_contents('php://input')){
    global $db;
    $input = json_decode($inputJSON, TRUE);
    var_dump($input);
    if(isset($input['first_name']) || isset($input['last_name']) || isset($input['phone_number'])){

        $id = $input['id'];
        $name = $input['first_name'];
        $surname = $input['last_name'];
        $phone = $input['phone_number'];

        $query = "UPDATE users SET first_name = '$name', last_name = '$surname', phone_number = '$phone' WHERE id = '$id'";
        $create_query = mysqli_query($db,$query);

        $_SESSION['first_name'] = $name;
        $_SESSION['last_name'] = $surname;
        $_SESSION['phone_number'] = $phone;
        
    }
    else{
        echo json_encode(["success" => false]);
    }
}
