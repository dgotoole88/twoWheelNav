<?php
include "../Model/connectDB.php";

    if(!isset($_SESSION)){
        session_start();
    }

    $user = $_SESSION['touristID'];

    $sqlPic = "SELECT profilePic FROM tourist WHERE touristID = '$user'";
    $sqlPicResult = $pdo->query($sqlPic);
    $showPic = $sqlPicResult->fetchColumn();

    echo $showPic;
?>