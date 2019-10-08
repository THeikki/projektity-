<?php include 'includes/yhteys.php'; ?>
<?php

  $idK = mysqli_real_escape_string($conn, $_POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $_POST['etunimi']);
  $sukunimi = mysqli_real_escape_string($conn, $_POST['sukunimi']);
  $osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
  $puhelinnumero = mysqli_real_escape_string($conn, $_POST['puhelinnumero']);

  $sqlinsert = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite','$puhelinnumero')";
  if (!mysqli_query($conn, $sqlinsert)) {
    die('Error: ' . mysqli_error($conn));
  }
  echo "1 record added";

?>
