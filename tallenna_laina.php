<?php include "includes/yhteys.php"
?>
<?php

  $idL = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idL',FILTER_SANITIZE_STRING));
  $lainannimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'lnimi',FILTER_SANITIZE_STRING));
  $lainanmaara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'lmaara',FILTER_SANITIZE_STRING));
  $lainankorko = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'lkorko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idK',FILTER_SANITIZE_STRING));

  $sql = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainannimi', '$lainanmaara', '$lainankorko', '$idK')";

  if (!mysqli_query($conn, $sql)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 laina lisätty";
  }
  header("Location: lisää_laina.php");
?>
