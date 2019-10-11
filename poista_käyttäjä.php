<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idKayttaja = $_GET['delete'];
    $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$idKayttaja'";
    mysqli_query($conn, $Deletequery) or die(mysqli_error($conn));
      echo "Käyttäjä poistettiin onnistuneesti!";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <hr class="line">
    <a href="Käyttäjä.php" class="back">Takaisin</a>
  </body>
</html>
