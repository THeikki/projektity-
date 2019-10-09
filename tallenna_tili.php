<?php include_once 'yhteys.php'; ?>
<?php

  $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
  $tilinnimi = mysqli_real_escape_string ($conn, $_POST['tilinnimi']);
  $tilinsaldo = mysqli_real_escape_string ($conn, $_POST['tilinsaldo']);
  $tilinkorko = mysqli_real_escape_string ($conn, $_POST['tilinkorko']);
  $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilinnimi', '$tilinsaldo', '$tilinkorko', '$idK')";

  if (!mysqli_query($conn, $sqlinsert)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 tili lisätty";

  }

?>
