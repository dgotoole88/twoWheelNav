    // SessionStorage for username
    var username = document.getElementById('username');
    
        if (sessionStorage.getItem('usernameSave')){
            username.value = sessionStorage.getItem('usernameSave');
        }
        if(username){
            username.addEventListener("change", function(){
            sessionStorage.setItem("usernameSave", username.value);
            console.log(username.value);
            });
        }
        // SessionStorage for first name
        var firstName = document.getElementById('firstName');
    
        if (sessionStorage.getItem('firstNameSave')){
            firstName.value = sessionStorage.getItem('firstNameSave');
        }
        if(firstName){
            firstName.addEventListener("change", function(){
            sessionStorage.setItem("firstNameSave", firstName.value);
            console.log(firstName.value);
            });
        }
        // SessionStorage for surname
        var surname = document.getElementById('surname');
    
        if (sessionStorage.getItem('surnameSave')){
            surname.value = sessionStorage.getItem('surnameSave');
        }
        if(surname){
            surname.addEventListener("change", function(){
            sessionStorage.setItem("surnameSave", surname.value);
            console.log(surname.value);
            });
        }
        // SessionStorage for email
        var email = document.getElementById('email');
    
        if (sessionStorage.getItem('emailSave')){
            email.value = sessionStorage.getItem('emailSave');
        }
        if(email){
            email.addEventListener("change", function(){
            sessionStorage.setItem("emailSave", email.value);
            console.log(email.value);
            });
        }