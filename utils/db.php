<?php
$conn = new mysqli("localhost", "root", "root", "liste_jeux");

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
