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
    $etunimi = $_POST['Etunimi'];
    $sukunimi = $_POST['Sukunimi'];
    $osoite = $_POST['Osoite'];
    $puhelinnumero = $_POST['Puhelinnumero'];
		$Updatequery = "UPDATE Kayttaja SET Etunimi='$etunimi', Sukunimi='$sukunimi', Osoite='$osoite', Puhelinnumero='$puhelinnumero' WHERE id='$idKayttaja'";
		mysqli_query($conn, $Updatequery) or die mysqli_error($conn));
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
          <input type="hidden" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="Etunimi" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="Sukunimi" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="Osoite" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="Puhelinnumero" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="insert" value="Muokkaa"> <br>
        </form>
    </div>
  </body>
</html>
