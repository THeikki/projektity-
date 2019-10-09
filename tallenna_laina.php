<?php include "includes/yhteys.php"
?>
<?php

  $idL = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idL',FILTER_SANITIZE_STRING));
  $lainan_nimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'lnimi',FILTER_SANITIZE_STRING));
  $lainan_maara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'lmaara',FILTER_SANITIZE_STRING));
  $lainan_korko = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'lkorko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idK',FILTER_SANITIZE_STRING));

  $tallennaL = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainan_nimi', '$lainan_maara', '$lainan_korko', '$idK')";

  if (!mysqli_query($conn, $tallennaL)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 laina lisätty";

  }
?>
