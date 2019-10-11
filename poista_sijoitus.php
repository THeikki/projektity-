<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idSijoitukset = $_GET['delete'];
    $Deletequery = "DELETE FROM Sijoitukset WHERE idSijoitukset='$idSijoitukset'";
    mysqli_query($conn, $Deletequery) or die(mysqli_error($conn));
      echo "Sijoitus poistettiin onnistuneesti!";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>poista_sijoitus</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Sijoitukset.php" class="back">Takaisin</a>
  </body>
</html>
