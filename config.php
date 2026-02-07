<?php 
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }

    $host = "localhost";
    $db = "stockx";
    $user = "root";
    $password = "";

    try {
        $conn = new PDO ("mysql:host=$host;dbname=$db", $user, $password);
    }
    catch(Exception $e) {
        echo "Not Connected, $e";
    }

  
?>