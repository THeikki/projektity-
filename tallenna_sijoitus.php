<?php include_once 'yhteys.php'; ?>
<?php

  $sql = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";

  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijoituskohde']);
  $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sijoituksen_maara']);
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osakkeiden_lukumaara']);
  $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osakkeen_arvo']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  mysqli_query($conn, $sql);

  header("Location: lisää_sijoitus.php?tallenna=success");
?>
