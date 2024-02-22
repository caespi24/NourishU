<?php
session_start();

// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'nourishu_db');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Retrieve form data and sanitize
    $fdcid = mysqli_real_escape_string($conn, $_POST['fdcid']);
    $fodname = mysqli_real_escape_string($conn, $_POST['fodname']);
    $fgroup = mysqli_real_escape_string($conn, $_POST['fgroup']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $eportion = mysqli_real_escape_string($conn, $_POST['eportion']);
    $energy = mysqli_real_escape_string($conn, $_POST['energy']);
    $protein = mysqli_real_escape_string($conn, $_POST['protein']);
    $carbs = mysqli_real_escape_string($conn, $_POST['carbs']);
    $fats = mysqli_real_escape_string($conn, $_POST['fats']);
    $fiber = mysqli_real_escape_string($conn, $_POST['fiber']);
    $vitc = mysqli_real_escape_string($conn, $_POST['vitc']);
    $vitb12 = mysqli_real_escape_string($conn, $_POST['vitb12']);
    $calc = mysqli_real_escape_string($conn, $_POST['calc']);
    $iron = mysqli_real_escape_string($conn, $_POST['iron']);
    $zinc = mysqli_real_escape_string($conn, $_POST['zinc']);

    // Insert into database
    $query = "INSERT INTO foodlist_tbl (FDCID, FOOD_NAME, FGROUP, LANG_TRANS, EPORTION, ENERGY, PROTEIN, CARBS, FATS, FIBER, VITC, VITB12, CALCIUM, IRON, ZINC) VALUES ('$fdcid', '$fodname', '$fgroup', '$cname', '$eportion', '$energy', '$protein', '$carbs', '$fats', '$fiber', '$vitc', '$vitb12', '$calc', '$iron', '$zinc')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = "Food successfully added";
        header('Location: foodlog1.php'); // Redirect to a specific page after successful insertion
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
