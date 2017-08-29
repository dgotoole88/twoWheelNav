<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include 'Controller/loginTrial.php';
            include 'View/header.php';
        ?>
        <link rel="stylesheet" type="text/css" href="View/css/twoWheelNav.css" media="screen"/>
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="loginContainer">
            <fieldset id="login">
                <form name="login" action="" method="post">
                    <h2 class="loginTitle">Log In</h2>
                    <div>
                        <label>Username</label>
                    </div>
                    <div>
                        <input name="username" type="text" required>
                    </div>
                    <div>
                        <label>Password</label> 
                    </div>
                    <div>
                        <input type="password" name="password" pattern="[A-Za-z0-9]{8,16}" required>
                    </div>
                    <div>
                        <button name="submit" type="submit" value="submit">Submit</button>
                    </div>
                </form>
            </fieldset>
        </div>
        <footer><?php include 'View/footer.php';?></footer>
    </body>
</html>