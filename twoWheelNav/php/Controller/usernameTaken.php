<?php
if(isset($_GET) & !empty($_POST)){
    if($_SESSION['count'] == 0){
        //include 'errorUsernameTaken.php';
        echo 'Damn, username is already taken';
    }
}
?>