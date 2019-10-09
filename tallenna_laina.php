<?php include_once 'yhteys.php'; ?>
<?php

  $sql = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainan_nimi', '$lainan_maara', '$lainan_korko', '$idK')";

  $idL = mysqli_real_escape_string($conn, $_POST['idL']);
  $lainan_nimi = mysqli_real_escape_string($conn, $_POST['lainan_nimi']);
  $lainan_maara = mysqli_real_escape_string($conn, $_POST['lainan_maara']);
  $lainan_korko = mysqli_real_escape_string($conn, $_POST['lainan_korko']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  mysqli_query($conn, $sql);

  header("Location: lisää_laina.php?tallenna=success");
?>
