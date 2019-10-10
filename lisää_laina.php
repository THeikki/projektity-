<?php
  include "includes/yhteys.php";

  $idL = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idLainat',FILTER_SANITIZE_STRING));
  $lainannimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan nimi',FILTER_SANITIZE_STRING));
  $lainanmaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan maara',FILTER_SANITIZE_STRING));
  $lainankorko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan korko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainannimi', '$lainanmaara', '$lainankorko', '$idK')";

  mysqli_query($conn, $sqlinsert);

  echo "1 laina lisätty";

  header("url=lisää_laina.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_laina</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div id="box1">
        <h2>Lainatiedot</h2>
        <form action"lisää_laina.php" methot="post">
          <input type="number" name="idL" value="" placeholder="id Laina"> <br><br>
          <input type="text" name="lainannimi" value="" placeholder="Lainan nimi"> <br><br>
          <input type="number" name="lainanmaara" value="" placeholder="Lainan määrä"> <br><br>
          <input type="number" name="lainankorko" value="" placeholder="Lainan korko"> <br><br>
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
