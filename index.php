<?php
include './utils/db.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
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

  <h1 class="text-center m-5">List des jeux! </h1>
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom du jeu</th>
          <th scope="col">Possesseur</th>
          <th scope="col">Prix</th>
          <th scope="col">Console</th>
          <th scope="col">Nbr de joueur Max</th>
          <th scope="col">Commentaire</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>

        <?php

        //  $sql = "SELECT * FROM jeux_video WHERE prix Between 10 AND 20";
        //  $sql = "SELECT * FROM jeux_video ORDER BY prix DESC LIMIT 3";.

        $sql = "SELECT * FROM jeux_video LIMIT 3";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '
    <tr>
    <th scope="row">' . $row["ID"] . '</th>
    <td>' . $row["nom"] . '</td>
    <td>' . $row["possesseur"] . '</td>
    <td>' . $row["prix"] . '</td>
    <td>' . $row["console"] . '</td>
    <td>' . $row["nbre_joueurs_max"] . '</td>
    <td>' . $row["commentaires"] . '</td>
    <td>
      <a href="delete-game.php/?id='.$row["ID"].'">
         <i class="fa-solid fa-trash"></i>
      </a>
      <a href="update-game.php/?id='.$row["ID"].'">
         <i class="fa-solid fa-pen"></i>
      </a>
     

      <a href="show-one-game.php/?id='.$row["ID"].'" class="btn btn-primary"> Details...</a></td>
  </tr>
    ';
          }
        } else {
          echo "0 results";
        }

        ?>
      </tbody>
    </table>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>