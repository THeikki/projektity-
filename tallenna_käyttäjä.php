<?php include_once 'yhteys.php'; ?>
<?php

  $idK = mysqli_real_escape_string($conn, $_POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $_POST['etunimi']);
  $sukunimi = mysqli_real_escape_string($conn, $_POST['sukunimi']);
  $osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
  $puhelinnumero = mysqli_real_escape_string($conn, $_POST['puhelinnumero']);

  $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";

  if (!mysqli_query($conn, $sql)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 käyttäjä lisätty";

  }

  header("refresh:2; url=lisää_käyttäjä.php");
?>
