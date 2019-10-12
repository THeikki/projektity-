<?php include "includes/yhteys.php"
?>
<?php
if(isset($_GET['edit'])){
 $sql = "SELECT * FROM data WHERE empid =" .$_GET['edit'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['update'])){
 $etunimi = $_POST['Etunimi'];
 $sukunimi = $_POST['Sukunimi'];
 $osoite = $_POST['Osoite'];
 $puhelinnumero = $_POST['Puhelinnumero'];
 $update = "UPDATE Kayttaja SET Etunimi='$etunimi', Sukunimi='$sukunimi',Osoite='$osoite',Puhelinnumero='$puhelinnumero' WHERE idKayttaja=". $_GET['edit'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 echo "Käyttäjä muokattiin onnistuneesti!"
 }
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
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div id="box1">
      <h2>Muokkaa käyttäjätietoja</h2>
      <form action="muokkaa_käyttäjä.php" method="post">
        <input type="text" name="Etunimi" placeholder="Etunimi" value="<?php echo $row['Etunimi']; ?>"><br/><br/>
        <input type="text" name="Sukunimi" placeholder="Sukunimi" value="<?php echo $row['Sukunimi']; ?>"><br/><br/>
        <input type="text" name="Osoite" placeholder="Osoite" value="<?php echo $row['Osoite']; ?>"><br/><br/>
        <input type="text" name="Puhelinnumero" placeholder="Puhelinnumero" value="<?php echo $row['Puhelinnumero']; ?>"><br/><br/>
        <input type="submit" name="update" value="Muokkaa"> <br>
      </form>
    </div>
  </body>
</html>
