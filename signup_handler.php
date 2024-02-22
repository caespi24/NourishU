<?php
session_start();

// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'nourishu_db');

if (isset($_POST['signup'])) {
    // Retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Consider hashing the password
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $bdate = mysqli_real_escape_string($conn, $_POST['bdate']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);

    // Hash the password for security
//    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the user already exists
    $user_check_query = "SELECT * FROM userinfo_tbl WHERE EMAIL='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['EMAIL'] === $email) {
            echo '<script>alert("Email already exists");</script>';
        }
    } else {
        // Insert the new user into the database
        $query = "INSERT INTO userinfo_tbl (EMAIL, PW, FN, LN, BDATE, AGE, SEX, WEIGHT, HEIGHT) VALUES('$email', '$password', '$fname', '$lname', '$bdate', '$age', '$sex', '$weight', '$height')";
        if (mysqli_query($conn, $query)) {
            $_SESSION['email'] = $email;
            echo '<script>alert("Account successfully created!");</script>';
            header('Location: index.php'); // Redirect to a welcome or dashboard page
        } else {
            echo '<script>alert("Error: Could not register user.");</script>';
        }
    }
}
?>
