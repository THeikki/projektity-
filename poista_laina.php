<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idLainat = $_GET['delete'];
    $sqldelete = "DELETE FROM Lainat WHERE idLainat='$idLainat'";
    $query_run = mysqli_query($conn, $sqldelete);

    if($query_run) {
      echo "Laina poistettiin onnistuneesti!";
    }
    else {
      echo "Lainaa ei poistettu!";
    }
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>poista_laina</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Lainat.php" class="back">Takaisin</a>
  </body>
</html>
