<?php


include './utils/db.php';

$sql = "UPDATE jeux_video
        SET nom='Luigi cart', console='Nintendo',prix=50
        WHERE ID=2 ";


include './utils/errorsHandler.php';