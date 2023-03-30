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
  <h1 class="text-center m-5">Modifier un jeu</h1>
  <form action="update-game.php" method="POST">
    <div>
      <label for="">Nom du jeu</label>
      <input type="text" name="nom">
    </div>
    <div>
      <label for="">Possesseur</label>
      <input type="text" name="possesseur">
    </div>
    <div>
      <label for="">Prix</label>
      <input type="number" name="prix">
    </div>
    <div>
      <label for="">Nombre de joueurs</label>
      <input type="number" name="nbr">
    </div>
    <div>
      <label for="">Commentaire</label>
      <input type="text" name="commentaires">
    </div>
    <div>
      <label for="">Console</label>
      <input type="text" name="console">
    </div>

    <div>
      <button type="submit">Envoyer</button>
    </div>
  </form>
</body>

</html>

<?php
include './utils/db.php';


if (
  isset($_POST['nom']) &&
  isset($_POST['possesseur']) &&
  isset($_POST['console']) &&
  isset($_POST['prix']) &&
  isset($_POST['nbr']) &&
  isset($_POST['commentaire'])
  
  ) {
    $nom = $_POST['nom'];
    
    $possesseur = $_POST['possesseur'];
    $console = $_POST['console'];
    $prix = $_POST['prix'];
    $nbr = $_POST['nbr'];
    $commentaires = $_POST['commentaires'];
    
    echo"Ok";
    die($nom);


}

echo "Error";


