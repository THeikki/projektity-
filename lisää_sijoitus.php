<?php
  include "includes/yhteys.php";

  $idS = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idSijoitukset',FILTER_SANITIZE_STRING));
  $sijoituskohde = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituksen kohde',FILTER_SANITIZE_STRING));
  $sijoituksenmaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituksen maara',FILTER_SANITIZE_STRING));
  $osakkeidenlukumaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeiden lukumaara',FILTER_SANITIZE_STRING));
  $osakkeenarvo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeen arvo',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo, idKayttaja)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksenmaara', '$osakkeidenlukumaara','$osakkeenarvo', '$idK')";

  mysqli_query($conn, $sqlinsert);

  echo "1 sijoitus lisätty";

  header("url=lisää_sijoitus.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_sijoitus</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Sijoitustiedot</h2>
        <form action"lisää_sijoitus.php" method="post">
          <input type="number" name="idS" value="" placeholder="id Sijoitus"> <br><br>
          <input type="text" name="sijoituskohde" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="number" name=sijoituksenmaara"" value="" placeholder="Sijoituksen määrä"> <br><br>
          <input type="number" name="osakkeidenlukumaara" value="" placeholder="Osakkeiden lukumäärä"> <br><br>
          <input type="number" name="osakkeenarvo" value="" placeholder="Osakkeen arvo"> <br><br>
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
