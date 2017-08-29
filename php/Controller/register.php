<?php
    $count = 0;

    if(isset($_POST) & !empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        $pdo = new PDO("mysql:host=localhost;dbname=twoWheelNav", 'root', '');
        $sqlReserved = "SELECT COUNT(*) FROM login WHERE username='$username'";
        $res = $pdo->query($sqlReserved);
        $count = $res->fetchColumn();

        if($count == 0){
            $sqlLogin = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
            $resultLogin = $pdo->query($sqlLogin);
    
            if($resultLogin){
                $sqlTourist = "INSERT INTO tourist (firstName, surname, email, loginID) VALUES ('$firstName', '$surname', '$email', (SELECT loginID FROM login WHERE username='$username'))";
                $result = $pdo->query($sqlTourist);
                if($result){
                    ?>
                        <script>
                            alert('Tourist Registration Successful! You may now login');
                            window.location="login.php";
                        </script>
                    <?php
                }else{
                    ?>
                    <script>alert('Tourist Registration Failed')</script>
                    <?php
                }
            }else{
                ?>
                <script>alert('Tourist Registration Failed')</script>
                <?php
            }
        }else{
            ?>
            <script>alert('Username Taken')</script>
            <?php
        }
    }
?>