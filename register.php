<?php
// Include the database connection file
require_once 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize user input
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $password = htmlspecialchars(stripslashes(trim($_POST['password'])));
    $firstName = htmlspecialchars(stripslashes(trim($_POST['fname'])));
    $lastName = htmlspecialchars(stripslashes(trim($_POST['lname'])));
    // Assuming you collect these fields based on your HTML structure
    $birthdate = $_POST['bdate'];
    $age = (int)$_POST['age'];
    $gender = htmlspecialchars(stripslashes(trim($_POST['sex'])));
    $weight = (double)$_POST['weight'];
    $height = (double)$_POST['height'];

    // Check if user already exists
    $stmt = $pdo->prepare("SELECT * FROM userinfo_tbl WHERE EMAIL = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        // User exists
        echo "User already exists with the provided email.";
    } else {
        // User doesn't exist, proceed with registration
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO userinfo_tbl (EMAIL, PW, FN, LN, BDAY, AGE, SEX, WEIGHT, HEIGHT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $success = $stmt->execute([$email, $hashedPassword, $firstName, $lastName, $birthdate, $age, $sex, $weight, $height]);

        if ($success) {
            echo "User registered successfully!";
            // Redirect to login page or dashboard as needed
            // header("Location: login.html"); // Adjust the redirect location as necessary
        } else {
            echo "Failed to register user.";
        }
    }
}
?>
