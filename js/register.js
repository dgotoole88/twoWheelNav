// Update email - jQuery / AJAX

  function submit() {
    $("#submit").click(function(e) {

      // Set all variables
      var username = $('#username').val();
      var password = $('#password').val();
      var firstName = $('#firstName').val();
      var surname = $('#surname').val();
      var email = $('#email').val();

      if(username && password && firstName && surname && email != ""){
        checkUser(username, password, firstName, surname, email);
      }else{
        alert('broken');
      }

      function checkUser(username, password, firstName, surname, email){
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
            if(data.status == 'Success'){
              document.getElementById("message").innerHTML="Form Submitted Successfully";
            }
            if(data.status == 'Error'){
              document.getElementById("message").innerHTML="Form did not submit";
            }
            if(data.status == 'Taken'){
              document.getElementById("message").innerHTML="Username is taken";
            }
          },
          error: function() {
            console.log("Signup was unsuccessful");
            if(data.status == 'Error'){
              document.getElementById("message").innerHTML="Form did not submit";
            }
          }
      });
      }
  });
}

$(document).ready(function() {
    submit();
});