<?php include "includes/yhteys.php"
?>
<?php

  $idS = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idSijoitukset',FILTER_SANITIZE_STRING));
  $sijoituskohde = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Sijoituksen kohde',FILTER_SANITIZE_STRING));
  $sijoituksenmaara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Sijoituksen maara',FILTER_SANITIZE_STRING));
  $osakkeidenlukumaara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Osakkeiden lukumaara',FILTER_SANITIZE_STRING));
  $osakkeenarvo = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Osakkeen arvo',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo, idKayttaja)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksenmaara', '$osakkeidenlukumaara','$osakkeenarvo', '$idK')";

  mysqli_query($conn, $sqlinsert);

  echo "1 sijoitus lisätty";

  header("url=lisää_sijoitus.php");
?>
