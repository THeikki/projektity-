<?php
  include_once 'yhteys.php';

  $idK = mysqli_real_escape_string($conn, $POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $POST['etun']);
  $sukunimi = mysqli_real_escape_string($conn, $POST['sukun']);
  $osoite = mysqli_real_escape_string($conn, $POST['oso']);
  $puhelinnumero = mysqli_real_escape_string($conn, $POST['puh']);

  $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite','$puhelinnumero')";
  mysqli_query($conn, $sql);

  header("Location: ../lisää_käyttäjä.php?tallennus=success");
?>
