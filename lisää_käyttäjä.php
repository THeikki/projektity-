<?php include 'includes/yhteys.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_käyttäjä</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Käyttäjätiedot</h2>
        <form methot="POST" action="lisää_käyttäjä.php">
          <input type="number" name="" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="" value="" placeholder="Osoite"> <br><br>
          <input type="text" name="" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="" value="Tallenna"> <br>
        </form>
    </div>
    <?php
      $idK = mysqli_real_escape_string($conn, $_POST['idK']);
      $etunimi = mysqli_real_escape_string($conn, $_POST['etunimi']);
      $sukunimi = mysqli_real_escape_string($conn, $_POST['sukunimi']);
      $osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
      $puhelinnumero = mysqli_real_escape_string($conn, $_POST['puhelinnumero']);

      $sqlinsert = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
      VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite','$puhelinnumero')";
      mysqli_query($conn, $sqlinsert)
    ?>
  </body>
</html>
