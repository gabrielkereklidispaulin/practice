<?php
// PDO-anslutning
try {
    $conn = new PDO(
        "mysql:host=mariadb;dbname=bokhandel", 
        "root", 
        "mariadb", 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Anslutning lyckades!";
} catch (PDOException $e) {
    echo "Anslutningsfel: " . $e->getMessage();
}
?>