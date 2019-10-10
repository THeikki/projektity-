<?php include "includes/yhteys.php" ?>
<?php

  $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));
  $etunimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Etunimi',FILTER_SANITIZE_STRING));
  $sukunimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sukunimi',FILTER_SANITIZE_STRING));
  $osoite = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osoite',FILTER_SANITIZE_STRING));
  $puhelinnumero = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Puhelinnumero',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idKayttaja', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";

  mysqli_query($conn, $sqlinsert);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_käyttäjä</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div id="box1">
        <h2>Käyttäjätiedot</h2>
        <form action="lisää_käyttäjä.php" method="post">
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="Etunimi" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="Sukunimi" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="Osoite" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="Puhelinnumero" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
