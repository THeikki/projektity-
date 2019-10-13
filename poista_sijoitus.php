<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idSijoitukset = $_GET['delete'];
    $sqldelete = "DELETE FROM Sijoitukset WHERE idSijoitukset='$idSijoitukset'";
    $query_run = mysqli_query($conn, $sqldelete);

    if($query_run) {
      echo "Sijoitus poistettiin onnistuneesti!";
    }
    else {
      echo "Sijoitusta ei poistettu!";
    }
  }
?>
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
