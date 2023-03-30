<?php


if ($conn->query($sql) === TRUE) {
  
    echo 'success';
}else {
    echo 'ERROR:: '. $conn->error;
}

$conn->close();