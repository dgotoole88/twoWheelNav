<?php
    include '../Model/connectDB.php';

    $count = 0;

    // validate user input
    function test_Reginput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST) & !empty($_POST)){
        $username = filter_var(test_Reginput($_POST['username']), FILTER_SANITIZE_STRING);
        $password = filter_var(test_Reginput($_POST['password']), FILTER_SANITIZE_STRING);
        $firstName = filter_var(test_Reginput($_POST['firstName']), FILTER_SANITIZE_STRING);
        $surname = filter_var(test_Reginput($_POST['surname']), FILTER_SANITIZE_STRING);
        $email = $_POST['email'];

        $sqlReserved = "SELECT COUNT(*) FROM login WHERE username='$username'";
        $res = $pdo->query($sqlReserved);
        $count = $res->fetchColumn();

        $hashedPass = password_hash($password, PASSWORD_DEFAULT);

        if($count == 0){
            $sqlLogin = "INSERT INTO login (username, password) VALUES ('$username', '$hashedPass')";
            $resultLogin = $pdo->query($sqlLogin);
    
            if($resultLogin){
                $sqlTourist = "INSERT INTO tourist (firstName, surname, email, loginID) VALUES ('$firstName', '$surname', '$email', (SELECT loginID FROM login WHERE username='$username'))";
                $result = $pdo->query($sqlTourist);
                if($result){
                    include 'regSuccess.php';
                    ?>
                        <script>
                            setTimeout(function () {
                            window.location.href = "../login.php"; 
                            }, 3000);
                        </script>
                    <?php
                }else{
                    include 'errorModal.php';
                    unset($_SESSION["currentUser"]);
                }
            }else{
                include 'errorModal.php';
            }
        }else{
            include 'errorUsernameTaken.php';
        }
    }
?>