<?php include_once 'yhteys.php'; ?>
<?php

  $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
  $tilin_nimi = mysqli_real_escape_string ($conn, $_POST['tilin_nimi']);
  $tilin_saldo = mysqli_real_escape_string ($conn, $_POST['tilin_saldo']);
  $tilin_korko = mysqli_real_escape_string ($conn, $_POST['tilin_korko']);
  $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

  $sql = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idK')";

  if (!mysqli_query($conn, $sql)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 tili lisätty";

  }

  header("refresh:2; url=lisää_tili.php");
?>
