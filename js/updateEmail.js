// Update email - jQuery / AJAX


  function submit() {
    $("#submitUpdate").click(function(e) {
      
      // Set variables
      var username = $('#username').val();
      var email = $('#email').val();

      if(username && email != ""){
        checkUser(username, email);
      }

      function checkUser(username, email){
        $.ajax({
          type: 'POST',
          url: '../Controller/updateUserData.php',
          data: {
            username: username,
            email: email
          },
          success: function(data) {
            console.log("Update successful");
          },//here
          error: function() {
            console.log("Update unsuccessful");
          }
      });
      }
  });
}

$(document).ready(function() {
    submit();
});