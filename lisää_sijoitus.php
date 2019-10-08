<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_sijoitus</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Sijoitustiedot</h2>
        <form methot="POST" action"includes/tallenna.php">
          <input type="number" name="idS" value="" placeholder="id Sijoitus"> <br><br>
          <input type="text" name="sijoituskohde" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="text" name=sijoituksen_maara"" value="" placeholder="Sijoituksen määrä"> <br><br>
          <input type="text" name="osakkeiden_lukumaara" value="" placeholder="Osakkeiden lukumäärä"> <br><br>
          <input type="text" name="osakkeen_arvo" value="" placeholder="Osakkeen arvo"> <br><br>
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
