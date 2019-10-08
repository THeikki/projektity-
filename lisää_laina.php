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
        <form methot="POST" action"tallenna_laina.php">
          <input type="number" name="idL" value="" placeholder="id Laina"> <br><br>
          <input type="text" name="lai_n" value="" placeholder="Lainan nimi"> <br><br>
          <input type="number" name="lai_m" value="" placeholder="Lainan määrä"> <br><br>
          <input type="number" name="lai_k" value="" placeholder="Lainan korko"> <br><br>
          <input type="text" name="idK" value="" placeholder="id Käyttäjä"> <br><br>
          <input type="submit" name="" value="Tallenna">
        </form>
    </div>
  </body>
</html>
