<?php include "includes/yhteys.php"
?>
<?php

	if( isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$res= mysqli_query("SELECT * FROM Kayttaja WHERE idKayttaja='$idKayttaja'");
		$row= mysqli_fetch_array($res);
	}

	if( isset($_POST['newName']))
	{
    $idKayttaja = $_POST['idKayttaja'];
    $uusi_etun = $_POST['uusi_etun'];
    $uusi_sukun = $_POST['uusi_sukun'];
    $uusi_os = $_POST['uusi_od´s'];
    $uusi_puh = $_POST['uusi_puh'];
		$Updatequery = "UPDATE Kayttaja SET Etunimi='$uusi_etun', Sukunimi='$uusi_sukun', Osoite='$uusi_os', Puhelinnumero='$uusi_puh' WHERE id='$idKayttaja'";
		mysqli_query($conn, $Updatequery) or die("Could not update".mysqli_error($conn));
		  echo "Käyttäjää muokattiin onnistuneesti!";
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
          <input type="hidden" name="idKayttaja" value="<?php echo $row[idKayttaja]; ?>" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="uusi_etun" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="uusi_sukun" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="uusi_os" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="uusi_puh" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="insert" value="Muokkaa"> <br>
        </form>
    </div>
  </body>
</html>
