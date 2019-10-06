<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "yhteys.php"?>
  <head>
    <meta charset="utf-8">
    <title>käyttäjä</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="Pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="Kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="Kayttaja.php" class="button2">Käyttäjä</a>
    <a href="Tilit.php" class="button1">Tilit</a>
    <a href="Sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="Lainat.php" class="button1">Lainat</a>
    <hr class="line">
  </body>
  <table>
    <thead>
      <tr>
        <th>id_Kayttaja</th>
        <th>Etunimi</th>
        <th>Sukunimi</th>
        <th>Osoite</th>
        <th>Puhelinnumero</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $Kayttaja
      foreach ($Kayttaja as $row) {
        echo '<tr>';
        echo '<td>' .$row['id_Kayttaja'].'>/td>';
        echo '<td>' .$row['Etunimi'].'>/td>';
        echo '<td>' .$row['Sukunimi'].'>/td>';
        echo '<td>' .$row['Osoite'].'>/td>';
        echo '<td>' .$row['Puhelinnumero'].'>/td>';
      }
      ?>
    </tbody>
  </table>
</html>
