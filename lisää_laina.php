<?php include_once 'includes/yhteys.php';
?>
<!DOCTYPE html>
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
        <form class="" action="" methot="post">
          <input type="number" name="idL" value="" placeholder="id Lainat"> <br><br>
          <input type="text" name="lai_n" value="" placeholder="Lainan nimi"> <br><br>
          <input type="date" name="lai_o" value="" placeholder="Lainan ottopäivä"> <br><br>
          <input type="number" name="lai_m" value="" placeholder="Lainan määrä"> <br><br>
          <input type="number" name="lai_k" value="" placeholder="Lainan korko"> <br><br>
          <input type="text" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
  <body>
    <?php
      $idL = mysqli_real_escape_string($con, $_POST['idL']);
      $lainan_nimi = mysqli_real_escape_string($con, $_POST['lai_n']);
      $lainan_ottopaiva = mysqli_real_escape_string($con, $_POST['lai_o']);
      $lainan_maara = mysqli_real_escape_string($con, $_POST['lai_m']);
      $lainan_korko = mysqli_real_escape_string($con, $_POST['lai_k']);
      $idK = mysqli_real_escape_string($con, $_POST['idK']);

      $sql = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan ottopaiva, Lainan maara, Lainan korko, idKayttaja)
      VALUES ('$idL', '$lainan_nimi', '$lainan_ottopaiva', '$lainan_maara','$lainan_korko', '$idK')";
    ?>
  </body>
</html>
