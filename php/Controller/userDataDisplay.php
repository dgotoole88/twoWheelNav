<?php
    

    if(!isset($_SESSION)){
        session_start();
    }
    include '../Model/connectDB.php';
    $userCheck = $_SESSION['currentUser'];
    $_SESSION['count'] = 1;

    $response = array(); // Array to json encode

    if(isset($_GET) & empty($_POST)){
        //display username
        $username = "SELECT username FROM login WHERE username = '$userCheck'";
        $usernameResult = $pdo->query($username);
        $showUsername = $usernameResult->fetchColumn();
        //dislplay first name
        $firstName = "SELECT tourist.firstName FROM tourist INNER JOIN login ON tourist.loginID = login.loginID WHERE username = '$userCheck'";
        $firstNameResult = $pdo->query($firstName);
        $showFirstName = $firstNameResult->fetchColumn();
        //dislplay surname
        $surname = "SELECT tourist.surname FROM tourist INNER JOIN login ON tourist.loginID = login.loginID WHERE username = '$userCheck'";
        $surnameResult = $pdo->query($surname);
        $showSurname = $surnameResult->fetchColumn();
        //dislplay email
        $email = "SELECT tourist.email FROM tourist INNER JOIN login ON tourist.loginID = login.loginID WHERE username = '$userCheck'";
        $emailResult = $pdo->query($email);
        $showEmail = $emailResult->fetchColumn();

        $response[0] = $showUsername;
        $response[1] = $showFirstName;
        $response[2] = $showSurname;
        $response[3] = $showEmail;
    }
    echo json_encode($response);
?>