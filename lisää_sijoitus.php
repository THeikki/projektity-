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
        <form methot="POST" action"tallenna_sijoitus.php">
          <input type="number" name="" value="" placeholder="id Sijoitus"> <br><br>
          <input type="text" name="" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="text" name="" value="" placeholder="Sijoituksen määrä"> <br><br>
          <input type="text" name="" value="" placeholder="Osakkeiden lukumäärä"> <br><br>
          <input type="text" name="" value="" placeholder="Osakkeen arvo"> <br><br>
          <input type="text" name="" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
