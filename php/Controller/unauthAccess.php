<?php 
    if(!isset($_SESSION['currentUser']))
    {
        //Not logged in
        header('Location: ../login.php');
        exit();
    }
?>