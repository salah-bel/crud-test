<?php

include './utils/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM jeux_video Where ID=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['nom'];
        echo $row['prix'];
    }
}
