<?php include "includes/yhteys.php"
?>
<?php

  $idL = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idLainat',FILTER_SANITIZE_STRING));
  $lainannimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Lainan nimi',FILTER_SANITIZE_STRING));
  $lainanmaara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Lainan maara',FILTER_SANITIZE_STRING));
  $lainankorko = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'Lainan korko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

  $sqlinsert = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainannimi', '$lainanmaara', '$lainankorko', '$idK')";

  mysqli_query($conn, $sqlinsert);

  echo "1 laina lisätty";

  header("url=lisää_laina.php");
?>
