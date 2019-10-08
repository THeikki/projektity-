<?php
  include 'includes/yhteys.php';

  $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
  $tilin_nimi = mysqli_real_escape_string ($conn, $_POST['tilin_nimi']);
  $tilin_saldo = mysqli_real_escape_string ($conn, $_POST['tilin_saldo']);
  $tilin_korko = mysqli_real_escape_string ($conn, $_POST['tilin_korko']);
  $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idK')";
  if (!mysqli_query($conn, $sqlinsert)) {
    die('Error: ' . mysqli_error($con));
  }
  echo "1 record added";
  mysqli_close($conn);
?>
