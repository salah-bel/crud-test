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
</head>

<body>
  <a href="/jeux">List des jeux</a>
  <a href="./new-game.php">Crrer un jeux</a>
  <h1 class="text-center m-5">List des jeux! 

  <i class="fa-sharp fa-light fa-magnifying-glass"></i>
  </h1>
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
    <th scope="row">'.$row["ID"].'</th>
    <td>'.$row["nom"].'</td>
    <td>'.$row["possesseur"].'</td>
    <td>'.$row["prix"].'</td>
    <td>'.$row["console"].'</td>
    <td>'.$row["nbre_joueurs_max"].'</td>
    <td>'.$row["commentaires"].'</td>
    <td>uPDATE DELETE</i><button class="btn btn-primary"> Details...</button></td>
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