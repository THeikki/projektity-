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
        <form methot="POST" action"includes/tallenna.php">
          <input type="number" name="idT" value="" placeholder="id Tili"> <br><br>
          <input type="text" name="tilin_nimi" value="" placeholder="Tilin nimi"> <br><br>
          <input type="text" name="tilin_saldo" value="" placeholder="Tilin saldo"> <br><br>
          <input type="text" name="tilin_korko" value="" placeholder="Tilin korko"> <br><br>
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
