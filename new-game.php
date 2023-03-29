<?php



$nom= $_POST['nom'];
$commentaires= $_POST['commentaire'];
$nbr= $_POST['nbr'];
$prix= $_POST['prix'];
$possesseur= $_POST['possesseur'];
$console= $_POST['console'];

include './utils/db.php';

$sql = "INSERT INTO
         jeux_video(nom, possesseur,console,prix, nbre_joueurs_max,commentaires)
        VALUES ('$nom', '$possesseur', '$console', '$prix', '$nbr', '$commentaires')";


include './utils/errorsHandler.php';

