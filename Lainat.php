<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "yhteys.php" ?>
  <head>
    <meta charset="utf-8">
    <title>lainat</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="Pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="Kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="Kayttaja.php" class="button1">Käyttäjä</a>
    <a href="Tilit.php" class="button1">Tilit</a>
    <a href="Sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="Lainat.php" class="button2">Lainat</a>
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
      foreach ($Lainat as $row) {
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
