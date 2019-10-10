<?php include "includes/yhteys.php" ?>
<?php

  $idLainat = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idLainat',FILTER_SANITIZE_STRING));
  $Lainannimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainannimi',FILTER_SANITIZE_STRING));
  $Lainanmaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainanmaara',FILTER_SANITIZE_STRING));
  $Lainankorko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainankorko',FILTER_SANITIZE_STRING));
  $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idLainat', '$Lainannimi', '$Lainanmaara', '$Lainankorko', '$idKayttaja')";

  mysqli_query($conn, $sqlinsert);
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
        <form action"lisää_laina.php" method="post">
          <input type="number" name="idLainat" value="" placeholder="id Laina"> <br><br>
          <input type="text" name="Lainannimi" value="" placeholder="Lainan nimi"> <br><br>
          <input type="text" name="Lainanmaara" value="" placeholder="Lainan määrä"> <br><br>
          <input type="text" name="Lainankorko" value="" placeholder="Lainan korko"> <br><br>
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
