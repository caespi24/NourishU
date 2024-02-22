<?php

session_start(); // Ensure session is started

// Database connection
$conn = mysqli_connect("localhost", "root", "", "nourishu_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['id'])) {
    $id = $_GET['id']; // Get the ID from the URL
    // SQL to delete the record
    $sql = "DELETE FROM logs_tbl WHERE ID = " . intval($id); // Ensure $id is an integer to prevent SQL injection

    if (mysqli_query($conn, $sql)) {
        // Use JavaScript for popup message and redirect
        echo "<script>alert('Record deleted successfully.'); window.location.href='foodlog1.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Redirect to foodlog1.php if no ID is provided
    header('Location: foodlog1.php');
    exit;
}
?>
