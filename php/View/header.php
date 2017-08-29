<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'Controller/navMenu.php' ?>
        <script type="text/javascript" src="../js/loginJS.js"></script>
        <link rel="stylesheet" type="text/css" href="css/twoWheelNav.css" media="screen"/>
    </head>
    <body>
        <header>
            <?php
            if($_SESSION['count'] == 0){
            ?>
                <nav id="navMenu">
                    <div id="logo">
                        <h2>Two Wheel Nav</h2>
                    </div>
                    <div class="navButton">
                        <a href="index.php">HOME</a>
                    </div>
                    <div class="navButton">
                        <a href="search.php">SEARCH</a>
                    </div>
                    <div class="navButton">
                        <a id="loginBut" href="login.php">LOGIN</a>
                    </div>
                    <div class="navButton">
                        <a id="regBut" href="signUp.php">REGISTER</a>
                    </div>
                </nav>
            <?php
            }
            ?>
            <?php
            if($_SESSION['count'] > 0){
            ?>
                <nav id="loggedNav">
                    <div id="logo">
                        <h2>Two Wheel Nav</h2>
                    </div>
                    <div class="navButton">
                        <a href="index.php">HOME</a>
                    </div>
                    <div class="navButton">
                        <a href="search.php">SEARCH</a>
                    </div>
                    <div class="navButton">
                        <a id="profBut" href="profile.php">VIEW PROFILE</a>
                    </div>
                    <div class="navButton">
                        <a id="logout" href="login.php?$logout=true">LOGOUT</a>
                    </div>
                </nav>
            <?php
            }
            ?>
        </header>
    </body>
</html>