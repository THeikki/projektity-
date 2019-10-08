<?php include_once 'includes/yhteys.php'; ?>
<?php
  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijk']);
  $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sij_m']);
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osa_l']);
  $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osa_a']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idL', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";
  mysqli_query($conn, $sqlinsert);
?>
