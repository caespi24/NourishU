<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'nourishu_db');
    $query = "SELECT * FROM userinfo_tbl WHERE EMAIL='$email' AND PW='$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['email'] = $email;
        header('Location: pdri.php');
        exit();
    } else {
        echo '<script>alert("Invalid email or password!");</script>';
    }
}
?>
