document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("registrationForm").addEventListener("submit", function (event) {
        event.preventDefault();

        validateForm(function (isValid) {
            if (isValid) {
                document.getElementById("registrationForm").submit();
            }
        });
    });
});


function validateForm(callback) {
  
  let lname = document.getElementById("lname");
  let email = document.getElementById("email");
  let pwd = document.getElementById("pwd");
  let pwd_confirm = document.getElementById("pwd_confirm");
  let agree = document.getElementById("agree");
  let strength = checkPasswordStrength(pwd.value);
  
  let lnameError = document.getElementById("lnameError");
  let emailError = document.getElementById("emailError");
  let pwdError = document.getElementById("pwdError");
  let pwdConfirmError = document.getElementById("pwdConfirmError");
  let agreeError = document.getElementById("agreeError");
  
  let isValid = true;
  let result = document.getElementById("result");
  if (strength < 5) {
    result.innerText = "Password must be very strong.";
    result.style.color = "red";
    result.style.display = "block";
    isValid = false;
  } else {
    result.style.display = "none";
  }

  if (lname.value.trim() === "") {
    lnameError.innerText = "Last name is required.";
    lnameError.style.display = "block";
    isValid = false;
  } else {
    lnameError.style.display = "none";
  }

   if (email.value.trim() === "") {
        emailError.innerText = "Email is required.";
        emailError.style.display = "block";
        isValid = false;
    } else {
        emailError.style.display = "none";
        checkEmailExists(email.value, function (emailExists) {
            if (emailExists) {
                emailError.innerText = "Email already exists.";
                emailError.style.display = "block";
                isValid = false;
            } else {
                emailError.style.display = "none";
            }
        }); // <-- Add closing bracket here
    }
  if (pwd.value.trim() === "") {
    pwdError.innerText = "Password is required.";
    pwdError.style.display = "block";
    isValid = false;
  } else {
    pwdError.style.display = "none";
  }

  if (pwd_confirm.value.trim() === "") {
    pwdConfirmError.innerText = "Confirm password is required.";
    pwdConfirmError.style.display = "block";
    isValid = false;
  } else if (pwd_confirm.value !== pwd.value) {
    pwdConfirmError.innerText = "Passwords do not match.";
    pwdConfirmError.style.display = "block";
    isValid = false;
  } else {
    pwdConfirmError.style.display = "none";
  }
  if (!agree.checked) {
    agreeError.innerText = "You must agree to the terms and conditions.";
    agreeError.style.display = "block";
    isValid = false;
  } else {
    agreeError.style.display = "none";
  }
  


        // Call the callback function with the final validation result
        callback(isValid);
    }


function checkEmailExists(email, callback) {
    $.ajax({
        type: "POST",
        url: "check-emailregister.php", // Change this line to point to the correct file
        data: {email: email},
        success: function (response) {
            callback(response === "Email already exists.");
        }
    });
}
