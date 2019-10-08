<?php include_once 'includes/yhteys.php';?>
<!DOCTYPE html>
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
        <form methot="POST">
          <input type="number" name="idS" value="" placeholder="id Sijoitukset"> <br><br>
          <input type="text" name="sijk" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="text" name="sij_m" value="" placeholder="Sijoituksen määrä"> <br><br>
          <input type="text" name="osa_l" value="" placeholder="Osakkeiden lukumäärä"> <br><br>
          <input type="text" name="osa_a" value="" placeholder="Osakkeen arvo"> <br><br>
          <input type="text" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
  <body>
    <?php
      $idS = mysqli_real_escape_string($conn, $_POST['idS']);
      $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijk']);
      $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sij_m']);
      $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osa_l']);
      $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osa_a']);
      $idK = mysqli_real_escape_string($conn, $_POST['idK']);

      $sql = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
      VALUES ('$idL', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";
      mysqli_query($conn, $sql);
   ?>
  </body>
</html>
