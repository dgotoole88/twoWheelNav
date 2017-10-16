<!DOCTYPE HTML>
<script>
    
</script>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../js/updateEmail.js"></script>
        <?php
            include 'header.php';
            include '../Controller/userDataDisplay.php';
            include '../Controller/unauthAccess.php';
        ?>
        <link rel="stylesheet" type="text/css" href="css/twoWheelNav.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="profileTitle">
            <h3 class="classH3">Hello <?php print_r($showFirstName); ?>!</h3>
            <h4 class="classH4">Welcome to your profile.</h4>
        </div>
        <div id="profileContainer">
            <fieldset id="userData">
                <h4 id="persDetHead">Personal Details</h4>
                <?php
                if(!empty($showUsername)){
                    ?>
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
                            <input class="inputLog" type="text" name="firstName" value="<?php print_r($showFirstName); ?>" pattern="[A-Za-z]{2,32}" required>
                        </div>
                        <div>
                            <label>Surname</label>
                        </div>
                        <div>
                            <input class="inputLog" type="text" name="surname" value="<?php print_r($showSurname); ?>" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                        </div>
                        <div>
                            <label>Email</label>
                        </div>
                        <div>
                            <input class="inputLog" id="email" type="email" name="email" value="<?php print_r($showEmail); ?>" required>
                            <div class="formHint">Email example: name@emailprovider.com</div>
                            <input type="button" id="submitUpdate" name="update" value="Update email" class="btn btn-primary btn-block btn-large">
                        </div>
                        <p id="status"></p>
                    </div>
                </form>
                <?php
                }
                ?>
            </fieldset>
        </div>
        <div id="update">
            <h2>Updated</h2>
        </div>
        <footer><?php include 'footer.php';?></footer>
    </body>
</html>