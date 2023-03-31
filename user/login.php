<?php  
 session_start();
?>
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
        <!--formulaire-->
        <h1>S'identifier</h1>

        <form action="login.php" method="POST">
                <div>
                        <label for="">Username</label>
                        <input type="text" name="username">
                </div>
                <div>
                        <label for="">Mot de passe</label>
                        <input type="text" name="password">
                </div>
                <div>
                        <button type="submit">Envoyer</button>
                </div>
        </form>
        <a href="/user/register.php">Register</a>
</body>

</html>

<?php


if (isset($_POST['username']) && isset($_POST['password']) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
      
        include '../utils/db.php';

        // $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        $sql = "SELECT *  FROM users WHERE username = '$username' AND password = '$password'";

        $user = $conn->query($sql);
        
        if ($user->num_rows > 0) {
            while ($row = $user->fetch_assoc()) 

                $_SESSION['isAuth'] = $row['username']; // salah@yahoo.fr

                header('Location: /jeux/index.php');
                exit();
            
        }else
         {
             echo "Something went wrong!<BR>";
             echo "Error Description: ", $conn->error;
      }
      $conn -> close();
    }
   
   
   

