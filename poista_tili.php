<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idTilit = $_GET['delete'];
    $sqldelete = "DELETE FROM Tilit WHERE idTilit='$idTilit'";
    $query_run = mysqli_query($conn, $sqldelete);

    if($query_run) {
      echo "Tili poistettiin onnistuneesti!";
    }
    else {
      echo "Tiliä ei poistettu!";
    }
  }
?>
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
