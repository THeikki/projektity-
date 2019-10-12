<?php include "includes/yhteys.php"
?>
<?php
  if(isset($_POST['btn-update'])) {
    $idLainat = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idLainat',FILTER_SANITIZE_STRING));
    $lainan_nimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan_nimi',FILTER_SANITIZE_STRING));
    $lainan_maara = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan_maara',FILTER_SANITIZE_STRING));
    $lainan_korko = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Lainan_korko',FILTER_SANITIZE_STRING));
    $idKayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));

   $sqlupdate = "UPDATE Lainat SET Lainan_nimi='$lainan_nimi', Lainan_maara='$lainan_maara', Lainan_korko='$lainan_korko' WHERE idKayttaja=". $_GET['edit'];
   $query_run = mysqli_query($conn, $sqlupdate);

   if($query_run) {
     echo "Laina muokattiin onnistuneesti!";
   }
   else {
     echo "Lainaa ei muokattu!";
   }
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>muokkaa_laina</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Lainat.php" class="back">Takaisin</a>
    <div id="box1">
      <form method="post">
        <h2>Muokkaa lainatietoja</h2>
        <input type="text" name="Lainan_nimi" placeholder="Lainan nimi" value="<?php echo $row['Lainan_nimi']; ?>"><br/><br/>
        <input type="text" name="Lainan_maara" placeholder="Lainan määrä" value="<?php echo $row['Lainan_maara']; ?>"><br/><br/>
        <input type="text" name="Lainan_korko" placeholder="Lainan korko" value="<?php echo $row['Lainan_korko']; ?>"><br/><br/>
        <button type="submit" name="btn-update">Muokkaa</button>
      </form>
    </div>
  </body>
</html>
