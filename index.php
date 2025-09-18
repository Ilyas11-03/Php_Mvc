<?php
require_once 'controller/stagiaire_controller.php'; // Include the controller file to handle the request
listeStagiaireAction(); // Call the list action to display all interns


$conn = new mysqli("localhost", "root", "", "ofppt");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>