document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registerForm").addEventListener("submit", function(event) {
        let hasError = false;

        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emailError");

        const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        if (!emailPattern.test(emailInput.value)) {
            emailError.innerText = "Invalid email format.";
            emailError.style.display = "block";
            hasError = true;
        } else {
            emailError.style.display = "none";
        }

        // Add similar validation for other fields here.

        if (hasError) {
            event.preventDefault();
        }
    });
});