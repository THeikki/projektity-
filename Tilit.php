<?php include "includes/yhteys.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tilit</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="Pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="Kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="Käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="Tilit.php" class="button2">Tilit</a>
    <a href="Sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="Lainat.php" class="button1">Lainat</a>
    <hr class="line">

    <?php

      $sql = "SELECT * FROM Tilit;";
      $result = mysqli_query($conn, $sql);

      echo "<table border='1'>
        <tr>
        <th>idTilit</th>
        <th>Tilin_nimi</th>
        <th>Tilin_saldo</th>
        <th>Tilin_korko</th>
        <th>idKayttaja</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['idTilit'] . "</td>";
        echo "<td>" . $row['Tilin_nimi'] . "</td>";
        echo "<td>" . $row['Tilin_saldo'] . "</td>";
        echo "<td>" . $row['Tilin_korko'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td><a href=muokkaa_käyttäjä.php?id=" . $row['idKayttaja'] . ">Muokkaa</a></td>";
        echo "<td><a href=poista_käyttäjä.php?id=" . $row['idKayttaja'] . ">Poista</a></td>";
        echo "</tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>
