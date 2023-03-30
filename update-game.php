<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/jeux">Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/jeux">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/jeux/new-game.php">Ajouter un jeu</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
        
</body>
</html>

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




<?php


include './utils/db.php';

$sql = "UPDATE jeux_video
        SET nom='Luigi cart', console='Nintendo',prix=50
        WHERE ID=2 ";


include './utils/errorsHandler.php';