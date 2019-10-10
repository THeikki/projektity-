<?php include "includes/yhteys.php"
?>
<?php

  $idT = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idT',FILTER_SANITIZE_STRING));
  $tilinnimi = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'tnimi',FILTER_SANITIZE_STRING));
  $tilinsaldo = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'tsaldo',FILTER_SANITIZE_STRING));
  $tilinkorko = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'tkorko',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idK',FILTER_SANITIZE_STRING));

  $sql = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilinnimi', '$tilinsaldo', '$tilinkorko', '$idK')";

  if (!mysqli_query($conn, $sql)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 tili lisätty";
  }
  header("Location: lisää_tili.php");
?>
