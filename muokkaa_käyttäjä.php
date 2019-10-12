<?php include "includes/yhteys.php"
?>
<?php
if(isset($_GET['edit'])){
  $sql = "SELECT * FROM Kayttaja WHERE idKayttaja =" .$_GET['edit'];
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  }
if(isset($_POST['update'])) {

  $idkayttaja = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'idKayttaja',FILTER_SANITIZE_STRING));
  $etunimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Etunimi',FILTER_SANITIZE_STRING));
  $sukunimi = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Sukunimi',FILTER_SANITIZE_STRING));
  $osoite = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Osoite',FILTER_SANITIZE_STRING));
  $puhelinnumero = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'Puhelinnumero',FILTER_SANITIZE_STRING));

  $Updatequery = "UPDATE Kayttaja SET Etunimi='$etunimi', Sukunimi='$sukunimi', Osoite='$osoite', Puhelinnumero='$puhelinnumero' WHERE idKayttaja='$_GET[edit]'";
  mysqli_query($conn, $Updatequery) or die(mysqli_error($conn));
          echo "Käyttäjä muokattiin onnistuneesti!";
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_käyttäjä</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Käyttäjä.php" class="back">Takaisin</a>
    <div id="box1">
        <h2>Muokkaa käyttäjätietoja</h2>
        <form action="muokkaa_käyttäjä.php" method="post">
          <input type="text" name="Etunimi" placeholder="Etunimi" value="<?php echo $row['Etunimi']; ?>"><br/><br/>
          <input type="text" name="Sukunimi" placeholder="Sukunimi" value="<?php echo $row['Sukunimi']; ?>"><br/><br/>
          <input type="text" name="Osoite" placeholder="Osoite" value="<?php echo $row['Osoite']; ?>"><br/><br/>
          <input type="number" name="Puhelinnumero" placeholder="Puhelinnumero" value="<?php echo $row['Puhelinnumero']; ?>"><br/><br/>
          <input type="submit" name="update" value="Muokkaa"> <br>
        </form>
    </div>
  </body>
</html>
