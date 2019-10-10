<?php include "includes/yhteys.php"
?>
<?php

  $idT = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idTilit',FILTER_SANITIZE_STRING));
  $tilinnimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Tilin nimi',FILTER_SANITIZE_STRING));
  $tilinsaldo = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Tilin saldo',FILTER_SANITIZE_STRING));
  $tilinkorko = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Tilin korko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko, idKayttaja)
  VALUES ('$idT', '$tilinnimi', '$tilinsaldo', '$tilinkorko', '$idK')";

  mysqli_query($conn, $sqlinsert);

  echo "1 tili lisätty";

  header("url=lisää_tili.php");
?>
