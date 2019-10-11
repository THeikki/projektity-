<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idTilit = $_GET['delete'];
    $Deletequery = "DELETE FROM Tilit WHERE idTilit='$idTilit'";
    mysqli_query($conn, $Deletequery) or die(mysqli_error($conn));
      echo "Tili poistettiin onnistuneesti!";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>poista_tili</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Tilit.php" class="back">Takaisin</a>
  </body>
</html>
