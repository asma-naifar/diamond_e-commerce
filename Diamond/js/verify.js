function checkPass()
{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirmPassword');
    var message = document.getElementById('error-password');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(pass1.value.length > 5)
    {
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        
    }
    else
    {
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 6 digit!"

    }
  
    if(pass1.value == pass2.value)
    {
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "";
        if (pass2.value === "" && pass1.value === ""){
            reinitializeConfPassword(pass2);
            reinitializePassword(pass1);
        }
    }
	else
    {
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " These passwords don't match";

    }
}  

function reinitializePasswords(){
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirmPassword');
    var message = document.getElementById('error-password');
    if (pass2.value === "" && pass1.value === ""){
            reinitializeConfPassword(pass2);
            reinitializePassword(pass1);
        }
    else if (pass2.value === "" && !(pass1.value ==="")){
            reinitializeConfPassword(pass2);
            message.innerHTML = "";
        }
    else if (pass1.value === "" && !(pass2.value ==="")){
            reinitializePassword(pass1);
        }
}

function reinitializePassword(pass1){
    pass1.style.backgroundColor = "#ffffff";
   $('#password').attr('placeholder','Password');
}

function reinitializeConfPassword(pass2){
    pass2.style.backgroundColor = "#ffffff";
   $('#confirmPassword').attr('placeholder','Confirm Password');
}

function validateEmail(email) {
  var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
  return re.test(email);
  
}

function reinitializeEmail(email){
    email.style.backgroundColor = "#ffffff";
   $('#email').attr('placeholder','Email Address');
}

function validate() {
  
    var email = document.getElementById("email");
    var badColor = "#ff6666";

    if (!validateEmail(email.value)){
        email.style.backgroundColor = badColor;
        if (email.value === ""){
            reinitializeEmail(email);
    }
  }
}

