<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'Controller/register.php';
            include 'View/header.php';?>
        <script type="text/javascript" src="../js/loginJS.js"></script>
        <link rel="stylesheet" type="text/css" href="View/css/twoWheelNav.css" media="screen"/>
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="loginContainer">
            <fieldset id="signUp">
                <h2 class="loginTitle">Register</h2>
                <fieldset id="touristReg">
                    <form action="" name="register" method="post" id="register">
                        <div>
                            <div>
                                <label>Username</label>
                            </div>
                            <div>
                                <input type="text" name="username" required>
                            </div>
                            <div>
                                <label>Password</label>
                            </div>
                            <div>
                                <input type="password" name="password" pattern="[A-Za-z0-9]{8,16}" required>
                            </div>
                            <div>
                                <label>First Name</label>
                            </div>
                            <div>
                                <input type="text" name="firstName" pattern="[A-Za-z]{2,32}" required>
                            </div>
                            <div>
                                <label>Surname</label>
                            </div>
                            <div>
                                <input type="text" name="surname" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                            </div>
                            <div>
                                <label>Email</label>
                            </div>
                            <div>
                                <input type="email" name="email" required>
                            </div>
                            <div>
                            <div>
                                <button name="submitTour" type="submit" value="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </fieldset>
        </div>
        <footer><?php include 'View/footer.php';?></footer>
    </body>
</html>