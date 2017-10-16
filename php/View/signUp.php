<!DOCTYPE HTML>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../js/register.js"></script>
        <?php   
            include 'registerHeader.php';
        ?>
        <link rel="stylesheet" type="text/css" href="css/twoWheelNav.css" media="screen"/>
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <div id="regContainer">
            <fieldset id="signUp">
                <h4 class="loginTitle">Register</h4>
                <fieldset id="touristReg">
                    <form action="" name="register" method="post" id="register">
                        <div>
                            <div>
                                <label>Username</label>
                            </div>
                            <div>
                                <input id="username" class="inputLog" type="text" name="username" pattern="^[a-z0-9]{3,15}$" required>
                                <div class="formHint">3 - 15 Letters or Numbers. No capitals</div>
                            </div>
                            <div>
                                <label>Password</label>
                            </div>
                            <div>
                                <input id="password" class="inputLog" type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                                <span class="formHint">Must have: UpperCase, LowerCase, and min 8 Chars</span>
                            </div>
                            <div>
                                <label>First Name</label>
                            </div>
                            <div>
                                <input id="firstName" class="inputLog" type="text" name="firstName" pattern="[A-Za-z]{2,32}" required>
                                <div class="formHint">Enter your First name</div>
                            </div>
                            <div>
                                <label>Surname</label>
                            </div>
                            <div>
                                <input id="surname" class="inputLog" type="text" name="surname" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                                <div class="formHint">Enter your surname</div>
                            </div>
                            <div>
                                <label>Email</label>
                            </div>
                            <div>
                                <input id="email" class="inputLog" type="email" name="email" required>
                                <div class="formHint">Email example: name@emailprovider.com</div>
                            </div>
                            <div>
                            <div>
                                <button id="submit" name="submitTour" type="button" value="submit" class="btn btn-primary btn-block btn-large">Submit</button>
                            </div>
                            <div>
                                <h2 id="message"></h2>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </fieldset>
        </div>
        <footer><?php include 'footerReg.php';?></footer>
    </body>
</html>
<script>
        // SessionStorage for username
        var username = document.getElementById('username');
    
        if (sessionStorage.getItem('usernameSave')){
            username.value = sessionStorage.getItem('usernameSave');
        }
        if(username){
            username.addEventListener("change", function(){
            sessionStorage.setItem("usernameSave", username.value);
            });
        }
        // SessionStorage for first name
        var firstName = document.getElementById('firstName');
    
        if (sessionStorage.getItem('firstNameSave')){
            firstName.value = sessionStorage.getItem('firstNameSave');
        }
        if(firstName){
            firstName.addEventListener("change", function(){
            sessionStorage.setItem("firstNameSave", firstName.value);
            });
        }
        // SessionStorage for surname
        var surname = document.getElementById('surname');
    
        if (sessionStorage.getItem('surnameSave')){
            surname.value = sessionStorage.getItem('surnameSave');
        }
        if(surname){
            surname.addEventListener("change", function(){
            sessionStorage.setItem("surnameSave", surname.value);
            });
        }
        // SessionStorage for email
        var email = document.getElementById('email');
    
        if (sessionStorage.getItem('emailSave')){
            email.value = sessionStorage.getItem('emailSave');
        }
        if(email){
            email.addEventListener("change", function(){
            sessionStorage.setItem("emailSave", email.value);
            });
        }
</script>