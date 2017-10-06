<?php 
    if(!isset($_SESSION['currentUser']))
    {
        //Not logged in
        header('Location: ../php/login.php');
        exit();
    }
?>