<?php include "includes/yhteys.php"
?>
<?php

	if( isset($_GET['edit']))
	{
		$idKayttaja = $_GET['edit'];
		$res= mysqli_query("SELECT * FROM Kayttaja WHERE idKayttaja='$idKayttaja'");
		$row= mysqli_fetch_array($res);
	}
  if( isset($_POST['uusi_etun']))
	{
		$uusi_etun = $_POST['uusi_etun'];
		$idKayttaja = $_POST['idKayttaja'];
		$sql = "UPDATE Kayttaja SET Etunimi='$uusi_etun' WHERE id='$idKayttaja'";
		$res = mysqli_query($sql) or die mysqli_error($conn));
  }
  if( isset($_POST['uusi_sukun']))
	{
		$uusi_sukun = $_POST['uusi_sukun'];
		$idKayttaja = $_POST['idKayttaja'];
		$sql = "UPDATE Kayttaja SET Sukunimi='$uusi_sukun' WHERE id='$idKayttaja'";
		$res = mysqli_query($sql) or die mysqli_error($conn));
  }
  if( isset($_POST['uusi_os']))
	{
		$uusi_os = $_POST['uusi_os'];
		$idKayttaja = $_POST['idKayttaja'];
		$sql = "UPDATE Kayttaja SET Osoite='$uusi_os' WHERE id='$idKayttaja'";
		$res = mysqli_query($sql) or die mysqli_error($conn));
  }
  if( isset($_POST['uusi_puh']))
	{
		$uusi_puh = $_POST['uusi_puh'];
		$idKayttaja = $_POST['idKayttaja'];
		$sql = "UPDATE Kayttaja SET Puhelinnumero='$uusi_puh' WHERE id='$idKayttaja'";
		$res = mysqli_query($sql) or die mysqli_error($conn));
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
          <input type="hidden" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="uusi_etun" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="uusi_sukun" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="uusi_os" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="uusi_puh" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="update" value="Muokkaa"> <br>
        </form>
    </div>
  </body>
</html>
