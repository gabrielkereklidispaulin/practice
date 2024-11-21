<?php
$servername = "mariadb";
$username = "mariadb";
$password = "mariadb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mariadb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully, ";
    $sql = "INSERT INTO user (username) VALUES ('testUser')";

    
    // "CREATE TABLE user (
    // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    // username VARCHAR(30) NOT NULL
    // )";

    $conn->exec($sql);
    echo "<br> New user added successfully"; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>