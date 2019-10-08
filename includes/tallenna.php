<?php include_once 'yhteys.php'; ?>
<?php

  $idK = mysqli_real_escape_string($conn, $_POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $_POST['etunimi']);
  $sukunimi = mysqli_real_escape_string($conn, $_POST['sukunimi']);
  $osoite = mysqli_real_escape_string($conn, $_POST['osoite']);
  $puhelinnumero = mysqli_real_escape_string($conn, $_POST['puhelinnumero']);

  $sql = "INSERT INTO Kayttaja (Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ($etunimi', '$sukunimi', '$osoite','$puhelinnumero')";
  mysqli_query($conn, $sql);

  header("Location: ../lisää_käyttäjä.php?tallenna=success");
?>

<?php

  $idL = mysqli_real_escape_string($conn, $_POST['idL']);
  $lainan_nimi = mysqli_real_escape_string($conn, $_POST['lainan_nimi']);
  $lainan_maara = mysqli_real_escape_string($conn, $_POST['lainan_maara']);
  $lainan_korko = mysqli_real_escape_string($conn, $_POST['lainan_korko']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sql = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainan_nimi', '$lainan_maara', '$lainan_korko', '$idK')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
  }
  echo "1 record added";
  header("Location: ../lisää_laina.php?tallenna=success");
?>

<?php

  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijoituskohde']);
  $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sijoituksen_maara']);
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osakkeiden_lukumaara']);
  $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osakkeen_arvo']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sql = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
  }
  echo "1 record added";
  header("Location: ../lisää_sijoitus.php?tallenna=success");
?>

<?php

  $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
  $tilin_nimi = mysqli_real_escape_string ($conn, $_POST['tilin_nimi']);
  $tilin_saldo = mysqli_real_escape_string ($conn, $_POST['tilin_saldo']);
  $tilin_korko = mysqli_real_escape_string ($conn, $_POST['tilin_korko']);
  $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

  $sql = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idK')";
  if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
  }
  echo "1 record added";
  header("Location: ../lisää_tili.php?tallenna=success");
?>
