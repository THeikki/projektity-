<?php include_once 'yhteys.php'; ?>
<?php

  $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";


  $idK = mysqli_real_escape_string($conn, $_POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $_POST['etunimi']);
  $sukunimi = mysqli_real_escape_string($conn, $_POST['sukunimi']);
  $osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
  $puhelinnumero = mysqli_real_escape_string($conn, $_POST['puhelinnumero']);

  mysqli_query($conn, $sql);

  header("Location: lisää_käyttäjä.php?tallenna=success");
?>
