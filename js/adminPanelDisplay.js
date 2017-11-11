// Display user data - jQuery / AJAX
$(document).ready(function() {
    $("#panelUser").click(function(e) {

        var username = document.getElementById("searchU").value;

        $.ajax({
            type: "POST",
            url: "../Controller/adminPanelDisplay.php",
            datatype: 'json',
            data: {
                username: username
            },
            success: function(data) {
                var obj = JSON.parse(data);
                $("#usernamePanel").val(obj[0]);
                $("#firstNamePanel").val(obj[1]);
                $("#surnamePanel").val(obj[2]);
                $("#emailPanel").val(obj[3]);

                console.log("User data displayed correctly");
            },
            error: function() {
                console.log("Something went wrong!");
            }
        });
    });
});