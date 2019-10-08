<?php
  include_once 'yhteys.php';

  $idK = mysqli_real_escape_string($conn, $_POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $_POST['etun']);
  $sukunimi = mysqli_real_escape_string($conn, $_POST['sukun']);
  $osoite = mysqli_real_escape_string($conn, $_POST['oso']);
  $puhelinnumero = mysqli_real_escape_string($conn, $_POST['puh']);

  $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite','$puhelinnumero')";
  mysqli_query($conn, $sql);

  header("Location: ../Pääsivu.php?tallennus=succes");
?>
