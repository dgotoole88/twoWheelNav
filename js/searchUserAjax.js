// Display user data - jQuery / AJAX

function userData() {
    
    $.ajax({
        type: "GET",
        url: "../Controller/searchUser.php",                            
        success: function (data) {
            console.log(data);
            alert(data);
            console.log("User data displayed correctly");
        },
        error: function (){
            console.log("Something went wrong!");
        }
    });
}

$(document).ready(function() {
    userData();
});