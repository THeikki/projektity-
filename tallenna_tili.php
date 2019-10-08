<?php include_once 'includes/yhteys.php'; ?>
<?php
  $idT = mysqli_real_escape_string ($conn, $_POST['idS']);
  $tilin_nimi = mysqli_real_escape_string ($conn, $_POST['t_n']);
  $tilin_saldo = mysqli_real_escape_string ($conn, $_POST['t_s']);
  $tilin_korko = mysqli_real_escape_string ($conn, $_POST['t_k']);
  $idK = mysqli_real_escape_string ($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Tilit (idTilit, Tilin nimi, Tilin saldo, Tilin korko)
  VALUES ('$idT', '$tilin_nimi', '$tilin_saldo', '$tilin_korko', '$idK')";
  mysqli_query($conn, $sqlinsert);
?>
