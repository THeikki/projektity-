<?php include 'yhteys.php'; ?>
<?php

  $idL = mysqli_real_escape_string($conn, $_POST['idL']);
  $lainan_nimi = mysqli_real_escape_string($conn, $_POST['lainan_nimi']);
  $lainan_maara = mysqli_real_escape_string($conn, $_POST['lainan_maara']);
  $lainan_korko = mysqli_real_escape_string($conn, $_POST['lainan_korko']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sql = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainan_nimi', '$lainan_maara', '$lainan_korko', '$idK')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
  }
  echo "1 record added";
  header("Location: ../Pääsivu.php?tallenna_laina=onnistui");
?>
