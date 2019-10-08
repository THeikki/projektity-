<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lisää_laina</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <body>
    <hr class="line">
    <a href="Pääsivu.php" class="back">Takaisin</a>
    <div class="box" id="box1">
        <h2>Lainatiedot</h2>
        <form methot="POST" action"includes/tallenna_laina.php">
          <input type="number" name="idL" value="" placeholder="id Laina"> <br><br>
          <input type="text" name="lainan_nimi" value="" placeholder="Lainan nimi"> <br><br>
          <input type="number" name="lainan_maara" value="" placeholder="Lainan määrä"> <br><br>
          <input type="number" name="lainan_korko" value="" placeholder="Lainan korko"> <br><br>
          <input type="number" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
