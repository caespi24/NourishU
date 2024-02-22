<?php
$host = 'localhost';
$dbname = 'nourishu_db';
$user = 'root'; // Assuming using root
$password = ''; // Assuming no password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Uncomment for testing, but comment out for production
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
