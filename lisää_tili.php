<?php include 'includes/yhteys.php';?>

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
        <form action"lisää_tili.php"methot="POST">
          <input type="text" name="idT" value="" placeholder="id Tilit"> <br><br>
          <input type="text" name="t_n" value="" placeholder="Tilin nimi"> <br><br>
          <input type="text" name="t_s" value="" placeholder="Tilin saldo"> <br><br>
          <input type="text" name="t_k" value="" placeholder="Tilin korko"> <br><br>
          <input type="text" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
    <?php
      $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
      $tilin_nimi = mysqli_real_escape_string ($conn, $_POST['t_n']);
      $tilin_saldo = mysqli_real_escape_string ($conn, $_POST['t_s']);
      $tilin_korko = mysqli_real_escape_string ($conn, $_POST['t_k']);
      $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

      $sql = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
      VALUES ('$idT', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idK')";
      mysqli_query($conn, $sql);
   ?>
  </body>
</html>
