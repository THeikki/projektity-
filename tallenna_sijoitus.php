<?php
  include 'includes/yhteys.php';

  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijoituskohde']);
  $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sijoituksen_maara']);
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osakkeiden_lukumaara']);
  $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osakkeen_arvo']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";
  if (!mysqli_query($conn, $sqlinsert)) {
    die('Error: ' . mysqli_error($conn));
  }
  echo "1 record added";
  header("Location: ..lisää_sijoitus.php?tallenna_sijoitus=onnistui");
?>
