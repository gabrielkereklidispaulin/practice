<?php
$servername = "mariadb";
$username = "mariadb";
$password = "mariadb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mariadb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>