$(function() {
    //autocomplete
    $("#searchU").autocomplete({
        source: "../Controller/searchUser.php",
        minLength: 1
    });
});