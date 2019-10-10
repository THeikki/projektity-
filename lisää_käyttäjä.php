<?php include "includes/yhteys.php" ?>
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
        <form action="" method="post">
          <input type="number" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="Etunimi" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="Sukunimi" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="Osoite" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="Puhelinnumero" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="insert" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
<?php

  if(isset($_POST['insert'])) {

    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));
    $etunimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Etunimi',FILTER_SANITIZE_STRING));
    $sukunimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sukunimi',FILTER_SANITIZE_STRING));
    $osoite = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osoite',FILTER_SANITIZE_STRING));
    $puhelinnumero = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Puhelinnumero',FILTER_SANITIZE_STRING));

    $sqlinsert = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
    VALUES ('$idKayttaja', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";

    $query_run = mysqli_query($conn, $sqlinsert);

    if($query_run) {
      echo '<script> alert("Käyttäjää ei tallennettu")</script>';
    }
  else {
    echo '<script> alert("Uusi käyttäjä tallennettiin")</script>';

  }
  }

?>
