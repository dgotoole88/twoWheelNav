// Update email - jQuery / AJAX
function submit() {
  $("#submitUpdate").click(function(e) {

      // Set variables
      var username = $('#username').val();
      var email = $('#email').val();

      if (username && email != "") {

          var checkEmail = document.getElementById('email');
          var testEmail = checkEmail.checkValidity();

          if (testEmail === false) {
              bootbox.alert({
                  message: "Email is incorrect",
                  size: 'small'
              });
          } else {
              checkUser(username, email);
          }
      } else {
          bootbox.alert({
              message: "Please insert an email address",
              size: 'small'
          });
      }

      function checkUser(username, email) {
          $.ajax({
              type: 'POST',
              url: '../Controller/updateUserData.php',
              data: {
                  username: username,
                  email: email
              },
              success: function(data) {
                  console.log("Update successful");
                  if (data.status == 'Success') {
                      bootbox.alert({
                          message: "Success! email updated.",
                          size: 'small'
                      });
                  }
                  if (data.status == 'Error') {
                      bootbox.alert({
                          message: "Email did not update ;-(",
                          size: 'small'
                      });
                  }
              }, //here
              error: function() {
                  bootbox.alert({
                      message: "Email did not update ;-(",
                      size: 'small'
                  });
              }
          });
      }
  });
}

$(document).ready(function() {
  submit();
});