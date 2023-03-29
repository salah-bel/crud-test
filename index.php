<!DOCTYPE html>
<html>
<body>

<?php
include './utils/db.php';

   $sql = "SELECT * FROM jeux_video WHERE prix Between 10 AND 20";
  //  $sql = "SELECT * FROM jeux_video ORDER BY prix DESC LIMIT 3";

   $result = $conn->query($sql);

   if($result->num_rows >0) {
     echo '<h1>Les 3 jeux les plus chers</h1> <br>';
    while($row = $result->fetch_assoc()) {
        echo "<a href=''>Prix: ".$row['prix']." ".$row['nom']."  </a> <br>"   ;
      }
    } else {
      echo "0 results";
    }

?>

</body>
</html>