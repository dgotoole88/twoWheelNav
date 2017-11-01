<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include '../Model/connectDB.php';
    $touristID = $_SESSION['touristID'];
    $_SESSION['startPoint'] = "";
    $_SESSION['endPoint'] = "";

    if(isset($_POST['sub'])) {
        $routeN = $_POST['open'];
        $_SESSION['routeName'] = $routeN;
        //display username
        $routeID = "SELECT routeID FROM savedroute WHERE routeName = '$routeN' && touristID = '$touristID'";
        $idResult = $pdo->query($routeID);
        $showID = $idResult->fetchColumn();
        //dislplay first name
        $start = "SELECT startPoint FROM savedroute WHERE routeID = '$showID'";
        $startResult = $pdo->query($start);
        $showStart = $startResult->fetchColumn();

        $_SESSION['startPoint'] = $showStart;

        //dislplay surname
        $end = "SELECT endPoint FROM savedroute WHERE routeID = '$showID'";
        $endResult = $pdo->query($end);
        $showEnd = $endResult->fetchColumn();

        $_SESSION['endPoint'] = $showEnd;
    }
?>