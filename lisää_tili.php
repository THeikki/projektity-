<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_tili</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Tilitiedot</h2>
        <form methot="POST" action"tallenna_tili.php">
          <input type="text" name="" value="" placeholder="id Tili"> <br><br>
          <input type="text" name="" value="" placeholder="Tilin nimi"> <br><br>
          <input type="text" name="" value="" placeholder="Tilin saldo"> <br><br>
          <input type="text" name="" value="" placeholder="Tilin korko"> <br><br>
          <input type="text" name="" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
