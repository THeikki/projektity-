<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_POST['insert'])) {

    $idTilit = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idTilit',FILTER_SANITIZE_STRING));
    $tilin_nimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin nimi',FILTER_SANITIZE_STRING));
    $tilin_saldo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin saldo',FILTER_SANITIZE_STRING));
    $tilin_korko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin korko',FILTER_SANITIZE_STRING));
    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

    $sqlinsert = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko, idKayttaja)
    VALUES ('$idTilit', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idKayttaja')";

    if(!mysqli_query($conn, $sqlinsert))
    {
     die('Error: ' . mysqli_error($conn));
    }
  }
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
        <form action="lisää_tili.php" method="post">
          <input type="number" name="idTilit" value="" placeholder="id Tili"> <br><br>
          <input type="text" name="Tilin nimi" value="" placeholder="Tilin nimi"> <br><br>
          <input type="text" name="Tilin saldo" value="" placeholder="Tilin saldo"> <br><br>
          <input type="text" name="Tilin korko" value="" placeholder="Tilin korko"> <br><br>
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="insert" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
