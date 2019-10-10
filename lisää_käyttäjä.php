<?php
  include "includes/yhteys.php";

  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));
  $etunimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Etunimi',FILTER_SANITIZE_STRING));
  $sukunimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Sukunimi',FILTER_SANITIZE_STRING));
  $osoite = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Osoite',FILTER_SANITIZE_STRING));
  $puhelinnumero = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Puhelinnumero',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";

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
        <form action="lisää_käyttäjä.php" methot="post">
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="etunimi" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="sukunimi" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="osoite" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="puhelinnumero" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
