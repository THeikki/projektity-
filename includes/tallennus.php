<?php
  include_once 'includes/yhteys.php';

  $idK = mysqli_real_escape_string($conn, $POST['idK']);
  $etunimi = mysqli_real_escape_string($conn, $POST['etun']);
  $sukunimi = mysqli_real_escape_string($conn, $POST['sukun']);
  $osoite = mysqli_real_escape_string($conn, $POST['oso']);
  $puhelinnumero = mysqli_real_escape_string($conn, $POST['puh']);

  $sql = "INSERT INTO Kayttaja (idKayttaja, Etunimi, Sukunimi, Osoite, Puhelinnumero)
  VALUES ('$idK', '$etunimi', '$sukunimi', '$osoite','$puhelinnumero')";
  mysqli_query($conn, $sql);


  $idL = mysqli_real_escape_string($conn, $_POST['idL']);
  $lainan_nimi = mysqli_real_escape_string($conn, $_POST['lai_n']);
  $lainan_ottopaiva = mysqli_real_escape_string($conn, $_POST['lai_o']);
  $lainan_maara = mysqli_real_escape_string($conn, $_POST['lai_m']);
  $lainan_korko = mysqli_real_escape_string($conn, $_POST['lai_k']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sql = "INSERT INTO Lainat (idLainat, Lainan nimi, Lainan ottopaiva, Lainan maara, Lainan korko, idKayttaja)
  VALUES ('$idL', '$lainan_nimi', '$lainan_ottopaiva', '$lainan_maara','$lainan_korko', '$idK')";
  mysqli_query($conn, $sql);

  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijk']);
  $sijoituksen_maara = mysqli_real_escape_string($conn, $_POST['sij_m']);
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, $_POST['osa_l']);
  $osakkeen_arvo = mysqli_real_escape_string($conn, $_POST['osa_a']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sql = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idL', '$sijoituskohde', '$sijoituksen_maara', '$osakkeiden_lukumaara','$osakkeen_arvo', '$idK')";
  mysqli_query($conn, $sql);

  $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
  $tilin_nimi = mysqli_real_escape_string ($conn, $_POST['t_n']);
  $tilin_aloituspaiva = mysqli_real_escape_string ($conn, $_POST['t_a']);
  $tilin_saldo = mysqli_real_escape_string ($conn, $_POST['t_s']);
  $tilin_korko = mysqli_real_escape_string ($conn, $_POST['t_k']);
  $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

  $sql = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin aloituspaiva, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilin_nimi', '$tilin_aloituspaiva', '$tilin_saldo','$tilin_korko', '$idK')";
  mysqli_query($conn, $sql);


?>
