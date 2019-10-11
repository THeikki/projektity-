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
		$newName = $_POST['newName'];
		$idKayttaja = $_POST['idKayttaja'];
		$Updatequery = "UPDATE Kayttaja SET Etunimi='$newName' WHERE id='$idKayttaja'";
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
        <h2>Käyttäjätiedot</h2>
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
