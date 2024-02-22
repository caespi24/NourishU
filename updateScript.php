<?php
session_start(); // Ensure session is started

// Database connection
$conn = mysqli_connect("localhost", "root", "", "nourishu_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = isset($_POST['record_id']) ? intval($_POST['record_id']) : 0;
    $foodname = isset($_POST['foodname']) ? $_POST['foodname'] : '';
    $datetime = isset($_POST['datetime']) ? $_POST['datetime'] : '';
    $lunit = isset($_POST['lunit']) ? $_POST['lunit'] : '';
    $lserving = isset($_POST['lserving']) ? $_POST['lserving'] : '';

    $DateTime = new DateTime($datetime);
    $hour = (int)$DateTime->format('G'); // 'G' returns the hour in 24-hour format without leading zeros
    $lmeal = 'Unknown';

    // Define meal types based on hour
    if ($hour >= 5 && $hour < 10) {
        $lmeal = 'Breakfast';
    } elseif ($hour >= 10 && $hour < 12) {
        $lmeal = 'AM Snack';
    } elseif ($hour >= 12 && $hour < 14) {
        $lmeal = 'Lunch';
    } elseif ($hour >= 14 && $hour < 17) {
        $lmeal = 'PM Snack';
    } elseif ($hour >= 17 && $hour < 21) {
        $lmeal = 'Dinner';
    } elseif ($hour >= 21 || $hour < 5) {
        $lmeal = 'Midnight Snack';
    }

    // Attempt to convert datetime to SQL format
    $dateTime = DateTime::createFromFormat('Y-m-d H:i', $datetime);
    $formattedDateTime = $dateTime ? $dateTime->format('Y-m-d H:i:s') : '';

    if (!$dateTime) {
        $_SESSION['error'] = "Invalid date format.";
  //      echo "Invalid date format.";
      header('Location: foodlog1.php');
        exit();
    }

    // Prepare the update statement
    $stmt = $conn->prepare("UPDATE logs_tbl SET LFOOD_NAME = ?, LDATE = ?, LMEAL_TIME = ?, LUNIT = ?, LSERVING = ? WHERE ID = ?");
    $stmt->bind_param("sssssi", $foodname, $formattedDateTime, $lmeal, $lunit, $lserving, $id);

    // Execute the query
    if ($stmt->execute()) {
        $_SESSION['message'] = "Record updated successfully.";
  //      echo "Record updated successfully.";
    } else {
        $_SESSION['error'] = "Error updating record: " . $stmt->error;
  //      echo "Error updating record: " ;
    }

    // Close statement and connection
    $stmt->close();
    mysqli_close($conn);

    // Redirect back to the food log page
    header('Location: foodlog1.php');
    exit();
}
?>
