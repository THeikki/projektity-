<?php include 'includes/yhteys.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_käyttäjä</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Käyttäjätiedot</h2>
        <form methot="POST" action="tallenna_käyttäjä.php">
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="text" name="etunimi" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="sukunimi" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="osoite" value="" placeholder="Osoite"> <br><br>
          <input type="text" name="puhelinnumero" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="" value="Tallenna"> <br>
        </form>
    </div>
  </body>
</html>
