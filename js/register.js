function submit() {
  $("#submit").click(function(e) {

      // Set all variables
      var username = $('#username').val();
      var password = $('#password').val();
      var firstName = $('#firstName').val();
      var surname = $('#surname').val();
      var email = $('#email').val();

      if (username && password && firstName && surname && email != "") {

          var checkUsername = document.getElementById('username');
          var checkPassword = document.getElementById('password');
          var checkFn = document.getElementById('firstName');
          var checkSn = document.getElementById('surname');
          var checkEmail = document.getElementById('email');

          var testUser = checkUsername.checkValidity();
          var testPass = checkPassword.checkValidity();
          var testFn = checkFn.checkValidity();
          var testSn = checkSn.checkValidity();
          var testEmail = checkEmail.checkValidity();

          if (testUser === false || testPass === false || testFn === false || testSn === false || testEmail === false) {
              bootbox.alert({
                  message: "The information you entered is incorrect",
                  size: 'small'
              });
          } else {
              checkUser(username, password, firstName, surname, email);
          }
      } else {
          var checkInputs = document.getElementsByTagName('input');
          var len = checkInputs.length;

          for (var i = 0; i < len; i++) {
              if (checkInputs[i].value === '') {
                  bootbox.alert({
                      message: "You need to complete all fields",
                      size: 'small'
                  });
                  return false;
              }
          }
      }

      function checkUser(username, password, firstName, surname, email) {
          $.ajax({
              type: 'POST',
              datatype: 'json',
              url: '../Controller/register.php',
              data: {
                  username: username,
                  password: password,
                  firstName: firstName,
                  surname: surname,
                  email: email
              },
              success: function(data) {
                  console.log(data);
                  if (data.status == 'Success') {
                      bootbox.alert({
                          message: "Success! You may now login.",
                          size: 'small'
                      });
                  }
                  if (data.status == 'Error') {
                      bootbox.alert({
                          message: "Damn, the form did not submit ;-(",
                          size: 'small'
                      });
                  }
                  if (data.status == 'Taken') {
                      bootbox.alert({
                          message: "Damn, that username is already taken ;-(",
                          size: 'small'
                      });
                  }
              },
              error: function() {
                  console.log("Signup was unsuccessful");
                  if (data.status == 'Error') {
                      bootbox.alert({
                          message: "Damn, the form did not submit ;-(",
                          size: 'small'
                      });
                  }
              }
          });
      }
  });
}

$(document).ready(function() {
  submit();
});