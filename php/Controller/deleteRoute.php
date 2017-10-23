<?php
    include '../Model/connectDB.php';

    if(isset($_POST['deleteRoute'])){
        $tour = $_SESSION['touristID'];
        $routeName = $_POST['deleteRoute'];
    
        $sqlD = "DELETE FROM savedroute WHERE touristID = '$tour' AND routeName = '$routeName'";
        $dResult = $pdo->prepare($sqlD);
        $delete = $dResult->execute();

        header('Location: ../View/profile.php');
    }
?>