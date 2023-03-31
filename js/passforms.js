function showPassword() {
    var x = document.getElementById("pwd");
    
    x.type = "text";
}

function hidePassword() {
    var x = document.getElementById("pwd");
    x.type = "password";
}

function myFunction(icon) {
    icon.classList.toggle("fa-eye-slash");
}
    
document.getElementById("pwd").addEventListener("input", function () {
  var strength = checkPasswordStrength(this.value);
  updatePasswordStrengthUI(strength);
});

//function checkPasswordStrength(password) {
//    var progressBar = document.getElementById("password-strength");
//    var result = document.getElementById("result");
//
//    var strength = 0;
//    var minLength = 8;
//    var hasLowercase = /[a-z]/.test(password);
//    var hasUppercase = /[A-Z]/.test(password);
//    var hasNumber = /\d/.test(password);
//    var hasSpecialCharacter = /[!@#$%^&*]/.test(password);
//
//    if (password.length >= minLength) strength++;
//    if (hasLowercase) strength++;
//    if (hasUppercase) strength++;
//    if (hasNumber) strength++;
//    if (hasSpecialCharacter) strength++;
//
//    progressBar.style.width = (strength * 20) + "%";
//
//    switch (strength) {
//        case 0:
//        case 1:
//            result.textContent = "Very weak";
//            progressBar.className = "progress-bar progress-bar-danger";
//            break;
//        case 2:
//            result.textContent = "Weak";
//            progressBar.className = "progress-bar progress-bar-warning";
//            break;
//        case 3:
//            result.textContent = "Moderate";
//            progressBar.className = "progress-bar progress-bar-info";
//            break;
//        case 4:
//            result.textContent = "Strong";
//            progressBar.className = "progress-bar progress-bar-primary";
//            break;
//        case 5:
//            result.textContent = "Very strong";
//            progressBar.className = "progress-bar progress-bar-success";
//            break;
//    }
//}

function checkPasswordStrength(password) {
  var strength = 0;
  var minLength = 8;
  var hasLowercase = /[a-z]/.test(password);
  var hasUppercase = /[A-Z]/.test(password);
  var hasNumber = /\d/.test(password);
  var hasSpecialCharacter = /[!@#$%^&*]/.test(password);

  if (password.length >= minLength) strength++;
  if (hasLowercase) strength++;
  if (hasUppercase) strength++;
  if (hasNumber) strength++;
  if (hasSpecialCharacter) strength++;

  return strength;
}

function updatePasswordStrengthUI(strength) {
  var progressBar = document.getElementById("password-strength");
  var result = document.getElementById("result");

  progressBar.style.width = (strength * 20) + "%";

  switch (strength) {
    case 0:
    case 1:
      result.textContent = "Very weak";
      progressBar.className = "progress-bar progress-bar-danger";
      break;
    case 2:
      result.textContent = "Weak";
      progressBar.className = "progress-bar progress-bar-warning";
      break;
    case 3:
      result.textContent = "Moderate";
      progressBar.className = "progress-bar progress-bar-info";
      break;
    case 4:
      result.textContent = "Strong";
      progressBar.className = "progress-bar progress-bar-primary";
      break;
    case 5:
      result.textContent = "Very strong";
      progressBar.className = "progress-bar progress-bar-success";
      break;
  }
}