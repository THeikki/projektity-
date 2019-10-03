<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lainat</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="tilit.php" class="button1">Tilit</a>
    <a href="sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="lainat.php" class="button2">Lainat</a>
    <hr class="line">
  </body>
  <table>
    <thead>
      <tr>
        <th>id_Lainat</th>
        <th>Lainan nimi</th>
        <th>Lainan ottopäivä</th>
        <th>Lainan määrä</th>
        <th>Lainan korko</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($käyttäjä as $row) {
        echo '<tr>';
        echo '<td>' .$row['id_Lainat'].'>/td>';
        echo '<td>' .$row['Lainan nimi'].'>/td>';
        echo '<td>' .$row['Lainan ottopäivä'].'>/td>';
        echo '<td>' .$row['Lainan määrä'].'>/td>';
        echo '<td>' .$row['Lainan korko'].'>/td>';
      }
      ?>
    </tbody>
  </table>
</html>
