<?php include "includes/yhteys.php"
?>
<?php
if(isset($_GET['edit'])) {
 $sql = "SELECT * FROM Sijoitukset WHERE idSijoitukset =" . $_GET['edit'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
if(isset($_POST['btn-update'])) {
  $idSijoitukset = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idSijoitukset',FILTER_SANITIZE_STRING));
  $sijoituskohde = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituskohde',FILTER_SANITIZE_STRING));
  $sijoituksen_summa = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sijoituksen_summa',FILTER_SANITIZE_STRING));
  $osakkeiden_lukumaara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeiden_lukumaara',FILTER_SANITIZE_STRING));
  $osakkeen_arvo = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osakkeen_arvo',FILTER_SANITIZE_STRING));
  $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

 $update = "UPDATE Sijoitukset SET Sijoituskohde='$sijoituskohde', Sijoituksen_summa='$sijoituksen_summa',Osakkeiden_lukumaara='$osakkeiden_lukumaara',Osakkeen_arvo='$osakkeen_arvo' WHERE idSijoitukset=". $_GET['edit'];
 $up = mysqli_query($conn, $update);
 if($up) {
   echo "Sijoitus muokattiin onnistuneesti!";
 }
 else {
   echo "Sijoitusta ei muokattu";
 }
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>muokkaa_sijoitus</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Sijoitukset.php" class="back">Takaisin</a>
    <div id="box1">
      <form method="post">
        <h2>Muokkaa sijoitustietoja</h2>
        <input type="text" name="Sijoituskohde" placeholder="Sijoituskohde" value="<?php echo $row['Sijoituskohde']; ?>"><br/><br/>
        <input type="text" name="Sijoituksen_summa" placeholder="Sijoituksen summa" value="<?php echo $row['Sijoitukse_summa']; ?>"><br/><br/>
        <input type="text" name="Osakkeiden_lukumaara" placeholder="Osakkeiden lukumäärä" value="<?php echo $row['Osakkeiden_lukumaara']; ?>"><br/><br/>
        <input type="text" name="Osakkeen_arvo" placeholder="Osakkeen arvo" value="<?php echo $row['Osakkeen_arvo']; ?>"><br/><br/>
        <button type="submit" name="btn-update">Muokkaa</button>
      </form>
    </div>
  </body>
</html>
