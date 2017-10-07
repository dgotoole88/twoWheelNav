<?php
    require("../Model/connectDB.php");
    
    // Gets data from URL parameters.
    $name = $_GET['markerName'];
    $address = $_GET['address'];
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $type = $_GET['type'];

    $tourist = $_SESSION["currentUser"];

    //display username
    $id = "SELECT loginID FROM login WHERE username = '$tourist'";
    $idResult = $pdo->query($id);
    $showID = $idResult->fetchColumn();
    
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO marker " .
             " (markerID, markerName, markerAddress, lat, lng, type, touristID ) " .
             " VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '$showID');",
             mysql_real_escape_string($name),
             mysql_real_escape_string($address),
             mysql_real_escape_string($lat),
             mysql_real_escape_string($lng),
             mysql_real_escape_string($type));
    
    $result = mysql_query($query);
    
    if (!$result) {
      die('Invalid query: ' . mysql_error());
    }
?>