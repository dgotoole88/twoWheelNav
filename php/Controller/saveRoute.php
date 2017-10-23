<?php

    header('Content-Type: application/json');

    include '../Model/connectDB.php';
    if(!isset($_SESSION)){
        session_start();
}

    // validate user input
    function test_Reginput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST) & !empty($_POST)){
        $startPoint = filter_var(test_Reginput($_POST['startPoint']), FILTER_SANITIZE_STRING);
        $endPoint = filter_var(test_Reginput($_POST['endPoint']), FILTER_SANITIZE_STRING);
        $routeName = filter_var(test_Reginput($_POST['routeName']), FILTER_SANITIZE_STRING);

        $user = $_SESSION['currentUser'];
        $id = $_SESSION['touristID'];

        $response = array(); // Array to json encode

        $sqlRoute = "INSERT INTO savedroute (startPoint, endPoint, routeName, touristID) VALUES ('$startPoint', '$endPoint', '$routeName', '$id')";
        $resultLogin = $pdo->query($sqlRoute);

        if($resultLogin){
            $response['status'] = 'Success';                // Set response status
            $response['message'] = 'This was successful';   // Set message status
        }else{
            $response['status'] = 'Error';                  // Set response status
            $response['message'] = 'This was unsuccessful'; // Set message status
        }

        echo json_encode($response);    // echo response as json
    }
?>