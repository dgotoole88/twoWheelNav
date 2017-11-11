function submit() {
    $("#clear").click(function(e) {
        $.ajax({
            url: '../Controller/clearDB.php',
            type: 'DELETE',
            success: function() {
                console.log('Delete Successful! :-)');
                document.getElementById("usernamePanel").value = "";
                document.getElementById("firstNamePanel").value = "";
                document.getElementById("surnamePanel").value = "";
                document.getElementById("emailPanel").value = "";

                bootbox.alert({
                    message: 'Database cleared! :-)',
                    size: 'small'
                });
            },
            error: function() {
                console.log('Delete did not work... :-(');

                bootbox.alert({
                    message: 'Delete did not work',
                    size: 'small'
                });
            }
        });
    });
    $("#deleteUser").click(function(e) {
        $.ajax({
            url: '../Controller/deleteUser.php',
            type: 'DELETE',
            success: function() {
                console.log('Delete Successful! :-)');
                document.getElementById("usernamePanel").value = "";
                document.getElementById("firstNamePanel").value = "";
                document.getElementById("surnamePanel").value = "";
                document.getElementById("emailPanel").value = "";

                bootbox.alert({
                    message: 'Delete Successful! :-)',
                    size: 'small'
                });
            },
            error: function() {
                console.log('Delete did not work... :-(');
            }
        });
    });
}

$(document).ready(function() {
    submit();
});