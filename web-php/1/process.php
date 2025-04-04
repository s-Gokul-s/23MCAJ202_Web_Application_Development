<?php
$name = $email = $password = $confirm_password = "";
$nameErr = $emailErr = $passwordErr = $confirmErr = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else if (strlen($_POST["password"]) < 6) {
        $passwordErr = "Password must be at least 6 characters";
    } else {
        $password = $_POST["password"];
    }

    // Confirm password
    if (empty($_POST["confirm_password"])) {
        $confirmErr = "Please confirm your password";
    } else if ($_POST["password"] !== $_POST["confirm_password"]) {
        $confirmErr = "Passwords do not match";
    } else {
        $confirm_password = $_POST["confirm_password"];
    }

    // Final Success
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmErr)) {
        $success = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
        .error {color: red;}
        .success {color: green;}
    </style>
</head>
<body>

<h2>Registration Result</h2>

<?php if ($success): ?>
    <p class="success"><?= $success ?></p>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
<?php else: ?>
    <p class="error"><?= $nameErr ?></p>
    <p class="error"><?= $emailErr ?></p>
    <p class="error"><?= $passwordErr ?></p>
    <p class="error"><?= $confirmErr ?></p>
    <a href="register.html">Go Back</a>
<?php endif; ?>

</body>
</html>
