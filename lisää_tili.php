<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_POST['insert'])) {

    $idTilit = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idTilit',FILTER_SANITIZE_STRING));
    $tilin_nimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin_nimi',FILTER_SANITIZE_STRING));
    $tilin_saldo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin_saldo',FILTER_SANITIZE_STRING));
    $tilin_korko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin_korko',FILTER_SANITIZE_STRING));
    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

    $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen_summa, Osakkeiden_lukumaara, Osakkeen_arvo, idKayttaja)
    VALUES ('$idTilit', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idKayttaja')";

    $query_run = mysqli_query($conn, $sqlinsert);

    if($query_run) {
      echo '<script> alert("Uusi tili tallennettiin")</script>';
    }
  else {
    echo '<script> alert("Tiliä ei tallennettu")</script>';
  }
  }
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
        <form action="lisää_sijoitus.php" method="post">
          <input type="number" name="idTilit" value="" placeholder="id Tili"> <br><br>
          <input type="text" name="Tilin_nimi" value="" placeholder="Tilin nimi"> <br><br>
          <input type="text" name="Tilin_saldo" value="" placeholder="Tilin saldo"> <br><br>
          <input type="text" name="Tilin_korko" value="" placeholder="Tilin korko"> <br><br>
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="insert" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
