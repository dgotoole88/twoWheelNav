<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'Controller/loginTrial.php';
            include 'View/loginHeader.php';
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <link rel="stylesheet" type="text/css" href="View/css/twoWheelNav.css" media="screen"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div class="login">
            <h1 class="classH1">Login</h1>
            <form id="loginForm" method="post">
                <div><input id="loginUsername" class="inputLog" type="text" name="username" placeholder="Username" pattern="^[a-z0-9_-]{3,15}$" required="required" /></div>
                <input class="inputLog" type="password" name="password" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
            </form>
        </div>
    </body>
</html>
<script>
            // SessionStorage for loginUsername
            var loginUsername = document.getElementById('loginUsername');
        
            if (sessionStorage.getItem('loginUsernameSave')){
                loginUsername.value = sessionStorage.getItem('loginUsernameSave');
            }
            if(loginUsername){
                loginUsername.addEventListener("change", function(){
                sessionStorage.setItem("loginUsernameSave", loginUsername.value);
                console.log(loginUsername.value);
                });
            }
</script>