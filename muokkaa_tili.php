<?php include "includes/yhteys.php"
?>
<?php
if(isset($_GET['edit'])) {
 $sql = "SELECT * FROM Tilit WHERE idTilit =" . $_GET['edit'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
if(isset($_POST['btn-update'])) {
  $idTilit = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idTilit',FILTER_SANITIZE_STRING));
  $tilin_nimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin_nimi',FILTER_SANITIZE_STRING));
  $tilin_saldo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin_saldo',FILTER_SANITIZE_STRING));
  $tilin_korko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Tilin_korko',FILTER_SANITIZE_STRING));
  $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

 $update = "UPDATE Tilit SET Tilin_nimi='$tilin_nimi', Tilin_saldo='$tilin_saldo',Tilin_korko='$tilin_korko' WHERE idTilit=". $_GET['edit'];
 $up = mysqli_query($conn, $update);
 if($up) {
   echo "Tiliä muokattiin onnistuneesti!";
 }
 else {
   echo "Tiliä ei muokattu";
 }
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>muokkaa_tili</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Tilit.php" class="back">Takaisin</a>
    <div id="box1">
      <form method="post">
        <h2>Muokkaa tilitietoja</h2>
        <input type="text" name="Tilin_nimi" placeholder="Tilin nimi" value="<?php echo $row['Tilin_nimi']; ?>"><br/><br/>
        <input type="text" name="Tilin_saldo" placeholder="Tilin saldo" value="<?php echo $row['Tilin_saldo']; ?>"><br/><br/>
        <input type="text" name="Tilin_korko" placeholder="Tilin korko" value="<?php echo $row['Tilin_korko']; ?>"><br/><br/>
        <button type="submit" name="btn-update">Muokkaa</button>
      </form>
    </div>
  </body>
</html>
