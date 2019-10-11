<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_POST['insert'])) {

    $idLainat = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idLainat',FILTER_SANITIZE_STRING));
    $lainan_nimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan_nimi',FILTER_SANITIZE_STRING));
    $lainan_maara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan_maara',FILTER_SANITIZE_STRING));
    $lainan_korko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan_korko',FILTER_SANITIZE_STRING));
    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

    $sqlinsert = "INSERT INTO Lainat (idLainat, Lainan_nimi, Lainan_maara, Lainan_korko, idKayttaja)
    VALUES ('$idLainat', '$lainan_nimi', '$lainan_maara', '$lainan_korko', '$idKayttaja')";

    $query_run = mysqli_query($conn, $sqlinsert);

    if($query_run) {
      echo '<script> alert("Uusi käyttäjä tallennettiin")</script>';
    }
  else {
    echo '<script> alert("Käyttäjää ei tallennettu")</script>';
  }
  }
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
    <div class="box" id="box1">
        <h2>Lainatiedot</h2>
        <form action="lisää_laina.php" method="post">
          <input type="number" name="idLainat" value="" placeholder="id Laina"> <br><br>
          <input type="text" name="Lainan_nimi" value="" placeholder="Lainan nimi"> <br><br>
          <input type="text" name="Lainan_maara" value="" placeholder="Lainan määrä"> <br><br>
          <input type="text" name="Lainan_korko" value="" placeholder="Lainan korko"> <br><br>
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="insert" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
