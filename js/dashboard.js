$(document).ready(registerEventHandlers);

function registerEventHandlers() {
    let updateForm = document.getElementById("update-form");
    let updateButton = document.getElementById("update-button");

    updateForm.addEventListener("submit", updateProfile);
    updateButton.addEventListener("click", enableEditing);
}

async function updateProfile(e) {
    e.preventDefault();
    
    // Flag to submit form
    let isValid = true;

    // Get input elements
    let email = document.getElementById("email");
    let password = document.getElementById("pwd");
    let pwdStrength = checkPasswordStrength(password.value);
    
    // Get error texts
    let emailError = document.getElementById("emailError");
    let pwdResult = document.getElementById("result");
    
    // Check if email exists in DB
    let emailExists = await checkEmailExists(email.value);

    if (emailExists) {
        emailError.innerText = "Email already in use.";
        emailError.style.display = "block";
        isValid = false;
    } else {
        emailError.style.display = "none";
    }
    
    if (pwdStrength < 5 && password.value.length > 0) {
        pwdResult.innerText = "Password must be very strong.";
        pwdResult.style.color = "red";
        pwdResult.style.display = "block";
        isValid = false;
    } else {
        pwdResult.style.display = "none";
    }

    if (isValid) {
        e.target.submit();
    }
}

function enableEditing(e) {
    // Get form fields and strength bar
    let lname = document.getElementById("lname");
    let fname = document.getElementById("fname");
    let email = document.getElementById("email");
    let password = document.getElementById("pwd");

    // Get button type attr
    let type = e.target.getAttribute("type");
    
    // Change form editable according to button type attr
    if (type === "button") {
        e.target.setAttribute("type", "submit");
        e.target.innerHTML = " Save ";
        
        lname.removeAttribute("disabled");
        fname.removeAttribute("disabled");
        email.removeAttribute("disabled");
        password.removeAttribute("disabled");
        
        lname.setAttribute("placeholder", "Type new last name here");
        fname.setAttribute("placeholder", "Type new first name here");
        email.setAttribute("placeholder", "Type new email here");
        password.setAttribute("placeholder", "Type new password here");
                
        e.preventDefault();
    }
}

//        $.ajax({
//            url: "process_update.php",
//            type: "post",
//            dataType: {lname: "dabe", fname: fname, email: email, password: password},
//            success:function(result) {
//                console.log(result.output);
//            }
//        });
