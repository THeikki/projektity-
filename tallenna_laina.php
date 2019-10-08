<?php include_once 'includes/yhteys.php'; ?>
<?php
  $idL = mysqli_real_escape_string($conn, $_POST['idL']);
  $lainan_nimi = mysqli_real_escape_string($conn, $_POST['lai_n']);
  $lainan_maara = mysqli_real_escape_string($conn, $_POST['lai_m']);
  $lainan_korko = mysqli_real_escape_string($conn, $_POST['lai_k']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainan_nimi', '$lainan_maara', '$lainan_korko', '$idK')";
  mysqli_query($conn, $sqlinsert);
 ?>
