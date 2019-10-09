<?php include_once 'yhteys.php'; ?>
<?php

  $idL = mysqli_real_escape_string($conn, $_POST['idL']);
  $lainannimi = mysqli_real_escape_string($conn, $_POST['lainannimi']);
  $lainanmaara = mysqli_real_escape_string($conn, $_POST['lainanmaara']);
  $lainankorko = mysqli_real_escape_string($conn, $_POST['lainankorko']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainannimi', '$lainanmaara', '$lainankorko', '$idK')";

  if (!mysqli_query($conn, $sqlinsert)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 laina lisätty";

  }


?>
