<?php
    header("Content-type: application/json");

    include '../Model/connectDB.php';

    if (isset($_GET['term'])){
        $searchUser = $_GET['term'];
        $return_arr = array();

        $sqlSearch = "SELECT * FROM login WHERE username LIKE '%" . $searchUser . "%'";
        $searchResult = $pdo->query($sqlSearch);
            
        while($row = $searchResult->fetch()) {
            $return_arr[] =  $row['username'];
        }
    echo json_encode($return_arr);
}
?>