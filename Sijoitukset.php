<?php include "includes/yhteys.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sijoitukset</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="Pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="Kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="Käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="Tilit.php" class="button1">Tilit</a>
    <a href="Sijoitukset.php" class="button2">Sijoitukset</a>
    <a href="Lainat.php" class="button1">Lainat</a>
    <hr class="line">

    <?php

      $sql = "SELECT * FROM Sijoitukset;";
      $result = mysqli_query($conn, $sql);

      echo "<table border='1'>
        <tr>
        <th>idSijoitukset</th>
        <th>Sijoituskohde</th>
        <th>Sijoituksen_summa</th>
        <th>Osakkeiden_lukumaara</th>
        <th>Osakkeen_arvo</th>
        <th>idKayttaja</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['idSijoitukset'] . "</td>";
        echo "<td>" . $row['Sijoituskohde'] . "</td>";
        echo "<td>" . $row['Sijoituksen_summa'] . "</td>";
        echo "<td>" . $row['Osakkeiden_lukumaara'] . "</td>";
        echo "<td>" . $row['Osakkeen_arvo'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td><a href=muokkaa_sijoitus.php?id=" . $row['idKayttaja'] . ">Muokkaa</a></td>";
        echo "<td><a href=poista_sijoitus.php?id=" . $row['idKayttaja'] . ">Poista</a></td>";
        echo "</tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>
