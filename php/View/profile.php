<!DOCTYPE HTML>
<script>
    
</script>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../js/displayRoutes.js"></script>
        <script src="../../js/displayUserData.js"></script>
        <script src="../../js/updateEmail.js"></script>
        <script src="../../js/index.js"></script>
        <?php
            include 'header.php';
            include '../Controller/unauthAccess.php';
            include '../Controller/deleteRoute.php';
        ?>
        <link rel="stylesheet" type="text/css" href="css/twoWheelNav.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="profileTitle">
            <h3 id="welcome" class="classH3">Hello </h3>
            <h4 class="classH4">Welcome to your profile.</h4>
        </div>
        <div id="profileContainer">
            <fieldset id="userData">
                <h4 id="persDetHead">Personal Details</h4>
                    <form action="" name="personalData" method="post" id="persData">
                    <div>
                        <div>
                            <label>Username</label>
                        </div>
                        <div>
                            <input id="username" class="inputLog" type="text" name="username" value="<?php print_r($showUsername); ?>" required>
                        </div>
                        <div>
                            <label>First Name</label>
                        </div>
                        <div>
                            <input id="firstName" class="inputLog" type="text" name="firstName" value="<?php print_r($showFirstName); ?>" pattern="[A-Za-z]{2,32}" required>
                        </div>
                        <div>
                            <label>Surname</label>
                        </div>
                        <div>
                            <input id="surname" class="inputLog" type="text" name="surname" value="<?php print_r($showSurname); ?>" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                        </div>
                        <div>
                            <label>Email</label>
                        </div>
                        <div>
                            <input class="inputLog" id="email" type="email" name="email" value="<?php print_r($showEmail); ?>" required>
                            <div class="formHint">Email example: name@emailprovider.com</div>
                            <input type="button" id="submitUpdate" name="update" value="Update email" class="btn btn-primary btn-block btn-large">
                        </div>
                        <div>
                            <h3 id="message"></h3>
                        </div>
                    </div>
                </form>
            </fieldset>
            <div id="userRoutes">
                <h4 id="persDetHead">Saved Routes</h4>
                <div id="dbRoutes"></div>
            </div>
        </div>
        <div id="update">
            <h2>Updated</h2>
        </div>
        <footer><?php include 'footer.php';?></footer>
    </body>
</html>