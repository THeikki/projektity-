<?php include "includes/yhteys.php"
?>
<?php

if(isset($_POST['edit'])) {
        $Updatequery = "UPDATE Kayttaja SET idKayttaja='$_POST[idKayttaja]', Etunimi='$_POST[etunimi]', Sukunimi='$_POST[sukunimi]', Osoite='$_POST[osoite]', Puhelinnumero='$_POST[puhelinnumero]', WHERE idKayttaja='$_POST[hidden]'";
        mysqli_query($Updatequery, $conn) or die(mysqli_error($conn));
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
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div id="box1">
        <h2>Muokkaa käyttäjätietoja</h2>
        <form action="muokkaa_käyttäjä.php" method="post">
          <input type="hidden" name="idKayttaja" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="etunimi" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="sukunimi" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="osoite" value="" placeholder="Osoite"> <br><br>
          <input type="number" name="puhelinnumero" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="update" value="Muokkaa"> <br>
        </form>
    </div>
  </body>
</html>
