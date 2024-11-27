<?php
require_once 'db.php';
echo "<br>"; 
//echo "Hello world!!!"; 


// CREATE
// $stmt = $conn->prepare("INSERT INTO customers (first_name, last_name) VALUES (:first_name, :last_name)");
// $stmt->bindParam(':first_name', $firstName);
// $stmt->bindParam(':last_name', $lastName);

// $firstName = "Anna";
// $lastName = "Svensson";

// $stmt->execute();

// echo " Ny kund har lagts till!";

 //READ
 
// // Anslut till databasen med PDO-attribut
// $conn = new PDO(
//     "mysql:host=localhost;dbname=myDb", 
//     "root", 
//     "", 
//     [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Kasta undantag vid fel
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Returnera associativa arrayer
//     ]
// );

// // Kör en fråga och hämta data
// $stmt = $conn->query("SELECT * FROM customers");
// foreach ($stmt as $row) {
//     echo "Customer: " . $row['name'] . "<br>"; // Visa varje kunds namn
// }

$stmt = $conn->query("SELECT * FROM customers");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
     echo "<br>" . $row['first_name'] . " " . $row['last_name'] . "<br>";
}



$stmt = $conn->prepare("UPDATE customers SET first_name = :first_name WHERE id = :id");
$stmt->bindParam(':first_name', $firstName);
$stmt->bindParam(':id', $id);

$firstName = "Gabriel";
$id = 1;
$stmt->execute();

echo "Kundens namn har uppdaterats!";

$stmt = $conn->prepare("DELETE FROM customers WHERE id = :id");
$stmt->bindParam(':id', $id);

$id = 6;
$stmt->execute();

echo "Kunden har tagits bort!";

?>