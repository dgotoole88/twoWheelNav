function submit() {
    $("#deleteUser").click(function(e) {
        $.ajax({
            url: '../Controller/deleteUser.php',
            type: 'DELETE',
            success: function() {
                console.log('Delete Successful! :-)');
                document.getElementById("messageDelete").style.display = "block";
                document.getElementById("usernamePanel").value = "";
                document.getElementById("firstNamePanel").value = "";
                document.getElementById("surnamePanel").value = "";
                document.getElementById("emailPanel").value = "";
            },
            error: function (){
                console.log('Delete did not work... :-(');
            }
        });            
  });
}
$(document).ready(function() {
    submit();
});