document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault(); // prevent the default form submission
    validateLoginForm();
  });
});

async function validateLoginForm() {
  let email = document.getElementById("email");
  let pwd = document.getElementById("pwd");

  let emailError = document.getElementById("emailError");
  let pwdError = document.getElementById("pwdError");

  let isValid = true;

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

  if (isValid) {
    let emailExists = await checkEmailExists(email.value);
    if (!emailExists) {
      emailError.innerText = "Email not found.";
      emailError.style.display = "block";
      isValid = false;
    } else {
      emailError.style.display = "none";
    }

    let isPasswordCorrect = await checkPassword(email.value, pwd.value);
    if (!isPasswordCorrect) {
      pwdError.innerText = "Incorrect password.";
      pwdError.style.display = "block";
      isValid = false;
    } else {
      pwdError.style.display = "none";
    }
  }

  if (isValid) {
    document.getElementById("loginForm").submit(); // submit the form if validation passes
  }
}

async function checkEmailExists(email) {
  let response = await fetch("check-email.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "email=" + encodeURIComponent(email)
  });

  let data = await response.text();
  return data === "true";
}

async function checkPassword(email, password) {
  let response = await fetch("check-password.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password)
  });

  let data = await response.text();
  return data === "true";
}