// Display user data - jQuery / AJAX
function userData() {
    
        $.ajax({
            type: "GET",
            url: "../Controller/userDataDisplay.php",
            success: function(data) {
                var obj = JSON.parse(data);
                $("#username").val(obj[0]);
                $("#firstName").val(obj[1]);
                $("#surname").val(obj[2]);
                $("#email").val(obj[3]);
    
                $("#welcome").append(obj[1]);
                console.log("User data displayed correctly");
            },
            error: function() {
                console.log("Something went wrong!");
            }
        });
    }
    
    $(document).ready(function() {
        userData();
    });