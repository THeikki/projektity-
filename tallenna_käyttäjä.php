<?php include "includes/yhteys.php"
?>
<?php

  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idK',FILTER_SANITIZE_STRING));
  $etunimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'etun',FILTER_SANITIZE_STRING));
  $sukunimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'sukun',FILTER_SANITIZE_STRING));
  $osoite = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'os',FILTER_SANITIZE_STRING));
  $puhelinnumero = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'puh',FILTER_SANITIZE_STRING));

  $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite', '$puhelinnumero')";

  if (!mysqli_query($conn, $sql)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 käyttäjä lisätty";
  }
  header("Location: lisää_käyttäjä.php");
?>
