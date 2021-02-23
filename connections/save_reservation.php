<?php include_once 'server.php';
$payload = file_get_contents('php://input');
$input =json_decode($payload, true);

if (isset($input['user_id']) && isset($input['repertoar_id']) && isset($input['broj_karata'])){
    try{
        $query = "INSERT INTO reservations (user_id, repertoar_id, broj_karata)
                 VALUES({$input['user_id']},{$input['repertoar_id']},{$input['broj_karata']})";
        mysqli_query($db, $query);
    
        $query = "SELECT num_of_free_seats FROM repertoire WHERE id={$input['repertoar_id']};";
        $result =  mysqli_query($db, $query);
        $numberOfFreeSeats = mysqli_fetch_assoc($result)['num_of_free_seats'] - $input['broj_karata'];

        $query = "UPDATE repertoire
        SET num_of_free_seats = {$numberOfFreeSeats}
        WHERE id={$input['repertoar_id']}";
        mysqli_query($db, $query);

        echo json_encode(["success" => true, 'free_seats' => $numberOfFreeSeats]);

    }catch(Exception $e){
        echo json_encode(["success" => false]);
    }
}

else{
    echo json_encode(["success" => false]);
}
?>