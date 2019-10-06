<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "yhteys.php" ?>
  <head>
    <meta charset="utf-8">
    <title>tilit</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="tilit.php" class="button2">Tilit</a>
    <a href="sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="lainat.php" class="button1">Lainat</a>
    <hr class="line">
  </body>
  <table>
    <thead>
      <tr>
        <th>id_Tilit</th>
        <th>Tilin nimi</th>
        <th>Tilin aloituspäivä</th>
        <th>Tilin saldo</th>
        <th>Tilin korko</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($Tilit as $row) {
        echo '<tr>';
        echo '<td>' .$row['id_Tilit'].'>/td>';
        echo '<td>' .$row['Tilin nimi'].'>/td>';
        echo '<td>' .$row['Tilin aloituspäivä'].'>/td>';
        echo '<td>' .$row['Tilin saldo'].'>/td>';
        echo '<td>' .$row['Tilin korko'].'>/td>';
      }
      ?>
    </tbody>
  </table>
</html>
