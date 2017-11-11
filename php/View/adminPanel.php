<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'header.php'; ?>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../js/adminPanelDisplay.js"></script>
        <script src="../../js/searchUser.js" type="text/javascript"></script>
        <script src="../../js/clearDB.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
        
        <title>Two Wheel Nav</title>
    </head>
    <body>
        <h3 id="adminPanelHead">Admin Panel</h3>
        <div id="deleteData">
            <input type="button" id="clear" name="clear" value="CLEAR DATABASE">
        </div>
        <div id="clearTest">
            <h3 id="dbCleared">Data cleared</h3>
        </div>
        <div id="AdminPanelContainer">
            <div id="panel">
                <form action="" method="POST">
                    <div id="centre">
                        <label id="white">Search for a user</label>
                        <input type="text" name="searchU" id="searchU" class="inputLog" placeholder="Auto search input" />
                    </div>
                    <div id="pressButt">
                        <input id="panelUser" name="panelUser" type="button" value="View user" name="searchUser" class="btn btn-primary btn-block btn-large">
                    </div>
                </form>
                <div id="hideForm">
                    <fieldset id="userDataAdmin">
                        <h4 id="persDetHead">User Details</h4>
                        <form action="" name="personalData" method="post" id="userAccounts">
                            <div>
                                <div>
                                    <label>Username</label>
                                </div>
                                <div>
                                    <input id="usernamePanel" class="inputLog" type="text" name="username" required>
                                </div>
                                <div>
                                    <label>First Name</label>
                                </div>
                                <div>
                                    <input id="firstNamePanel" class="inputLog" type="text" name="firstName" pattern="[A-Za-z]{2,32}" required>
                                </div>
                                <div>
                                    <label>Surname</label>
                                </div>
                                <div>
                                    <input id="surnamePanel" class="inputLog" type="text" name="surname" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                                </div>
                                <div>
                                    <label>Email</label>
                                </div>
                                <div>
                                    <input class="inputLog" id="emailPanel" type="email" name="email" required>
                                    <div class="formHint">Email example: name@emailprovider.com</div>
                                    <input type="button" id="deleteUser" name="deleteUser" value="Delete user" class="btn btn-primary btn-block btn-large">
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </body>
</html>