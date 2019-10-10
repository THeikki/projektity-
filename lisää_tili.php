<?php include "includes/yhteys.php" ?>
<?php


  $idT = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idTilit',FILTER_SANITIZE_STRING));
  $tilinnimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin nimi',FILTER_SANITIZE_STRING));
  $tilinsaldo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin saldo',FILTER_SANITIZE_STRING));
  $tilinkorko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin korko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko, idKayttaja)
  VALUES ('$idT', '$tilinnimi', '$tilinsaldo', '$tilinkorko', '$idK')";

  mysqli_query($conn, $sqlinsert);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_tili</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Tilitiedot</h2>
        <form action"lisää_tili.php" method="post">
          <input type="number" name="idT" value="" placeholder="id Tili"> <br><br>
          <input type="text" name="tilinnimi" value="" placeholder="Tilin nimi"> <br><br>
          <input type="number" name="tilinsaldo" value="" placeholder="Tilin saldo"> <br><br>
          <input type="number" name="tilinkorko" value="" placeholder="Tilin korko"> <br><br>
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
