<?php include "includes/yhteys.php"
?>
<?php

  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));
  $etunimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Etunimi',FILTER_SANITIZE_STRING));
  $sukunimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Sukunimi',FILTER_SANITIZE_STRING));
  $osoite = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Osoite',FILTER_SANITIZE_STRING));
  $puhelinnumero = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Puhelinnumero',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";

  mysqli_query($conn, $sqlinsert);

  echo "1 käyttäjä lisätty";

  header("url=lisää_käyttäjä.php");
?>
