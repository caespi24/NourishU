<?php
session_start();

// Check if the user is logged in and has an ID in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}

// Include database connection
// Include your database connection code here
$conn = mysqli_connect('localhost', 'root', '', 'nourishu_db');
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}

// Retrieve user input from the form
$firstName = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$birthDate = filter_input(INPUT_POST, 'bdate', FILTER_SANITIZE_STRING); // Ensure this matches your date format
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
$sex = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_STRING);
$weight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$height = filter_input(INPUT_POST, 'height', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

// Validate the input as needed...

// Prepare the SQL update statement
$sql = "UPDATE userinfo_tbl SET
            FN=?,
            LN=?,
            BDATE=?,
            AGE=?,
            SEX=?,
            WEIGHT=?,
            HEIGHT=?
        WHERE ID=?";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    // Handle error
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    exit;
}

// Bind the parameters and execute
$stmt->bind_param("sssiidii",
                  $firstName,
                  $lastName,
                  $birthDate,
                  $age,
                  $sex,
                  $weight,
                  $height,
                  $_SESSION['user_id']);

if (!$stmt->execute()) {
    // Handle error
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
} else {
    echo "Account information updated successfully.";
    // Redirect back to the account page or another appropriate page
    header("Location: account.php"); // Adjust as needed
    exit();
}

$stmt->close();
$conn->close();
?>
