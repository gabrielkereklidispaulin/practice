<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Hej, $name!";


    $name;
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        global $name;
        $name = htmlspecialchars($_GET['name']);
        echo "Hej, $name!";
    }
    echo "Servernamn: " . $_SERVER['SERVER_NAME'];
    echo "HTTP-metod: " . $_SERVER['REQUEST_METHOD'];

    $_SESSION['username'] = $name;
    echo "Välkommen, " . $_SESSION['username'];
}
