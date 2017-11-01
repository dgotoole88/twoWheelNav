<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include '../Model/connectDB.php';

        $user = $_SESSION['adminView'];
    
        $sqlS = "SELECT loginID FROM login WHERE username = '$user'";
        $sResult = $pdo->query($sqlS);
        $show = $sResult->fetchColumn();

        $sqlD = "DELETE FROM login WHERE loginID = '$show'";
        $dResult = $pdo->prepare($sqlD);
        $delete = $dResult->execute();

        unset($_SESSION['adminView']);
?>