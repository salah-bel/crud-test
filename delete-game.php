<?php

    include './utils/db.php';

  

    $id = $_GET['id'];

    // $sql = "DELETE FROM jeux_video WHERE ID IN(56,57,58,59) ";
    $sql = "DELETE FROM jeux_video WHERE ID=$id";

    header('Location: /jeux/index.php');

    include './utils/errorsHandler.php';