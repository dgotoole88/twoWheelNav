<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include 'View/header.php';
            include 'Controller/loginTrial.php';
            include 'Controller/userDataDisplay.php';
        ?>
<link rel="stylesheet" type="text/css" href="View/css/twoWheelNav.css" media="screen"/>
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="profileTitle">
            <h3>Hello <?php print_r($showFirstName); ?>!</h3>
        </div>
        <div id="profileContainer">
            <fieldset id="userData">
                <?php
                if(!empty($showUsername)){
                    ?>
                    <form action="" name="register" method="post" id="register">
                    <div>
                        <div>
                            <label>Username</label>
                        </div>
                        <div>
                            <input type="text" name="username" value="<?php print_r($showUsername); ?>" required>
                        </div>
                        <div>
                            <label>First Name</label>
                        </div>
                        <div>
                            <input type="text" name="firstName" value="<?php print_r($showFirstName); ?>" pattern="[A-Za-z]{2,32}" required>
                        </div>
                        <div>
                            <label>Surname</label>
                        </div>
                        <div>
                            <input type="text" name="surname" value="<?php print_r($showSurname); ?>" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                        </div>
                        <div>
                            <label>Email</label>
                        </div>
                        <div>
                            <input type="email" name="email" value="<?php print_r($showEmail); ?>" required>
                        </div>
                    </div>
                </form>
                <?php
                }
                ?>
            </fieldset>
        </div>
        <footer><?php include 'View/footer.php';?></footer>
    </body>
</html>