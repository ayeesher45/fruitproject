<?php
// Database configuration
$host       = "localhost";
$username   = "root"; // Replace with your database username
$password   = ""; // Replace with your database password
$dbname     = "project"; // Replace with your database name

// Attempt to connect to the database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Display error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}

