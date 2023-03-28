document.getElementById("registrationForm").addEventListener("submit", function (event) {
  if (!validateForm()) {
    event.preventDefault();
  }
});


function validateForm() {
  
  let lname = document.getElementById("lname");
  let email = document.getElementById("email");
  let pwd = document.getElementById("pwd");
  let pwd_confirm = document.getElementById("pwd_confirm");
  let agree = document.getElementById("agree");
 
  let lnameError = document.getElementById("lnameError");
  let emailError = document.getElementById("emailError");
  let pwdError = document.getElementById("pwdError");
  let pwdConfirmError = document.getElementById("pwdConfirmError");
  let agreeError = document.getElementById("agreeError");
  
  let isValid = true;

  

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

  return isValid;
}
