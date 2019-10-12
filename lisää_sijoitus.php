<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_POST['insert'])) {
    $idSijoitukset = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idSijoitukset',FILTER_SANITIZE_STRING));
    $sijoituskohde = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituskohde',FILTER_SANITIZE_STRING));
    $sijoituksen_summa = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituksen_summa',FILTER_SANITIZE_STRING));
    $osakkeiden_lukumaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeiden_lukumaara',FILTER_SANITIZE_STRING));
    $osakkeen_arvo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeen_arvo',FILTER_SANITIZE_STRING));
    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

    $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen_summa, Osakkeiden_lukumaara, Osakkeen_arvo, idKayttaja)
    VALUES ('$idSijoitukset', '$sijoituskohde', '$sijoituksen_summa', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idKayttaja')";

    $query_run = mysqli_query($conn, $sqlinsert);

    if($query_run) {
      echo "Sijoitus lisättiin onnistuneesti!";
    }
    else {
      echo "Sijoitusta ei lisätty!";
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
        <h2>Anna sijoitustiedot</h2>
        <form action="lisää_sijoitus.php" method="post">
          <input type="number" name="idSijoitukset" value="" placeholder="id Sijoitus"> <br><br>
          <input type="text" name="Sijoituskohde" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="text" name="Sijoituksen_summa" value="" placeholder="Sijoituksen määrä"> <br><br>
          <input type="text" name="Osakkeiden_lukumaara" value="" placeholder="Osakkeiden lukumäärä"> <br><br>
          <input type="text" name="Osakkeen_arvo" value="" placeholder="Osakkeen arvo"> <br><br>
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="insert" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
