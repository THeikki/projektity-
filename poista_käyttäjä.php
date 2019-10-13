<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idKayttaja = $_GET['delete'];
    $sqldelete = "DELETE FROM Kayttaja WHERE idKayttaja='$idKayttaja'";
    $query_run = mysqli_query($conn, $sqldelete);

    if($query_run) {
      echo "Käyttäjä poistettiin onnistuneesti!";
    }
    else {
      echo "Käyttäjää ei poistettu!";
    }
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>poista_käyttäjä</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Käyttäjä.php" class="back">Takaisin</a>
  </body>
</html>
