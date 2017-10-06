<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=twowheelnav", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e){
        $error_message = $e->getMessage();
?>
        <h1>Database Connection Error - Incorrect Login</h1>
        <p>Error Message: <?php echo $error_message; ?></p>
<?php
        die();
    }
?>