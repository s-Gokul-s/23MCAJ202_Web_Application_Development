document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Stop form submission

    // Assign Values from Form to Variables
    let fullname = document.getElementById("fullname").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let dob = document.getElementById("dob").value;
    let gender = document.getElementById("gender").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    // Check for Empty field  and show an alert 
    if (fullname === "" || email === "" || phone === "" || dob === "" || gender === "" || password === "" || confirmPassword === "") {
        alert("All fields are required.");
        return;
    }
    // Check  email for "@" and "."
    if (!email.includes("@")) {
        alert("Please include '@' in the email address.");
        return;
    }
    
    if (!email.includes(".")) {
        alert("Please include a '.' in the email address.");
        return;
    }

    if (email.startsWith("@") || email.startsWith(".") || email.endsWith("@") || email.endsWith(".")) {
        alert("Email cannot start or end with '@' or '.'.");
        return;
    }

    // Regex Validation
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email format.");
        return;
    }
    // Phone Number Pattern
    let phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Phone number must be 10 digits.");
        return;
    }

    let passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Password length
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return;
    }

    // Password contain  at least 1 Uppercase
    if (!/[A-Z]/.test(password)) {
        alert("Password must contain at least one uppercase letter.");
        return;
    }

    // Password contains at least 1 number
    if (!/\d/.test(password)) {
        alert("Password must contain at least one number.");
        return;
    }

    // Password contains at least 1 special character
    if (!/[@$!%*?&]/.test(password)) {
        alert("Password must contain at least one special character (@, $, !, %, *, ?, &).");
        return;
    }

    // Password and confirm password match
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return;
    }

    // If all Ok , allow form submission
    alert("Form submitted successfully!");


});

// Show/Hide Password Toggle Functionality
document.getElementById("togglePassword").addEventListener("change", function() {
    let passwordField = document.getElementById("password");
    if (this.checked) {
        passwordField.type = "text"; // Show password
    } else {
        passwordField.type = "password"; // Hide password
    }
});