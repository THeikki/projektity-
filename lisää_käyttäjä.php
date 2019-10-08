<?php include_once 'includes/yhteys.php';
?>
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
        <form class="" action="" methot="post">
          <input type="number" name="idK" value="" placeholder="id käyttäjä"> <br><br>
          <input type="text" name="etun" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="sukun" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="oso" value="" placeholder="Osoite"> <br><br>
          <input type="text" name="puh" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="" value="Tallenna"> <br>
        </form>
    </div>
  </body>
  <body>
    <?php
      $idK = mysqli_real_escape_string($con, $_POST['idK']);
      $etunimi = mysqli_real_escape_string($con, $_POST['etun']);
      $sukunimi = mysqli_real_escape_string($con, $_POST['sukun']);
      $osoite = mysqli_real_escape_string($con, $_POST['oso']);
      $puhelinnumero = mysqli_real_escape_string($con, $_POST['puh']);

      $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
      VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite','$puhelinnumero')";

      echo $sql;
    ?>
  </body>
</html>
