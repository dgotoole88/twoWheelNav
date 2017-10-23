// Display Routes - jQuery / AJAX

function getRoutes() {

    $.ajax({
        type: "GET",
        url: "../Controller/displayRoutes.php",                            
        success: function (data) {
            console.log("Routes displayed correctly");
            $("#dbRoutes").append(data);
        },
        error: function (){
            console.log("Something went wrong!");
        }
    });
}
$(document).ready(function() {
    getRoutes();
});