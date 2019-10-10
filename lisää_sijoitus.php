<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_POST['insert'])) {

    $idSijoitukset = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idSijoitukset',FILTER_SANITIZE_STRING));
    $sijoituskohde = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituskohde',FILTER_SANITIZE_STRING));
    $sijoituksensumma = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituksen summa',FILTER_SANITIZE_STRING));
    $osakkeidenlukumaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeiden lukumaara',FILTER_SANITIZE_STRING));
    $osakkeenarvo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeen arvo',FILTER_SANITIZE_STRING));
    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

    $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen summa, Osakkeiden lukumaara, Osakkeen arvo, idKayttaja)
    VALUES ('$idSijoitukset', '$sijoituskohde', '$sijoituksensumma', '$osakkeidenlukumaara','$osakkeenarvo', '$idKayttaja')";

    $query_run = mysqli_query($conn, $sqlinsert);

    if($query_run) {
      echo '<script> alert("Uusi sijoitus tallennettiin")</script>';
    }
  else {
    echo '<script> alert("Sijoitusta ei tallennettu")</script>';
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
          <input type="number" name="idSijoitukset" value="" placeholder="id Sijoitus"> <br><br>
          <input type="text" name="Sijoituskohde" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="text" name="Sijoituksen summa" value="" placeholder="Sijoituksen määrä"> <br><br>
          <input type="text" name="Osakkeiden lukumaara" value="" placeholder="Osakkeiden lukumäärä"> <br><br>
          <input type="text" name="Osakkeen arvo" value="" placeholder="Osakkeen arvo"> <br><br>
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="insert" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
