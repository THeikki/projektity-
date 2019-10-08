<?php
  include 'includes/yhteys.php';

  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijoituskohde']);
  $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sijoituksen_maara']);
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osakkeiden_lukumaara']);
  $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osakkeen_arvo']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idL', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";
  if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
  }
  echo "1 record added";
  mysqli_close($con);
?>
