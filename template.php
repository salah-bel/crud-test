

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/">List des jeux</a>
       <a href="./new-game.php">Crrer un jeux</a>
       
    </nav>
    <h1>Ajouter un jeu</h1>

    <form action="new-game.php" method="POST">
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
            <input type="text" name="commentaire">
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





