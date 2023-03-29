<?php

include './utils/db.php';

$sql = "INSERT INTO
         jeux_video(nom, possesseur,console,prix, nbre_joueurs_max,commentaires)
        VALUES ('Toml','kid','Sony',200,0,'GG')";


include './utils/errorsHandler.php';