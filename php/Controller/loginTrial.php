<?php
        if(!isset($_SESSION)){
            session_start();
    }
    $pdo = new PDO("mysql:host=localhost;dbname=twoWheelNav", 'root', '');
    $_SESSION['count'] = 0;

    if(isset($_GET) & !empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['currentUser'] = $username;

    $checkUsername = "SELECT COUNT(*) FROM login WHERE username='$username' && password='$password'";
    $result = $pdo->query($checkUsername);
    $_SESSION['count'] = $result->fetchColumn();

    if($_SESSION['count'] > 0){
    ?>
        <script type="text/javascript">
            window.location="profile.php";
        </script>
    <?php
    }if($_SESSION['count'] == 0){    
    ?>
        <script type="text/javascript">
            alert("Incorrect Login");
        </script>
    <?php
    }
}
?>