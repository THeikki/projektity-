<?php include "includes/yhteys.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>käyttäjä</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="Pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="Kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="Käyttäjä.php" class="button2">Käyttäjä</a>
    <a href="Tilit.php" class="button1">Tilit</a>
    <a href="Sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="Lainat.php" class="button1">Lainat</a>
    <hr class="line">

    <?php

      $sql = "SELECT * FROM Kayttaja;";
      $result = mysqli_query($conn, $sql);

      echo "<table border='1'>
        <tr>
        <th>idKayttaja</th>
        <th>Etunimi</th>
        <th>Sukunimi</th>
        <th>Osoite</th>
        <th>Puhelinnumero</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td>" . $row['Etunimi'] . "</td>";
        echo "<td>" . $row['Sukunimi'] . "</td>";
        echo "<td>" . $row['Osoite'] . "</td>";
        echo "<td>" . $row['Puhelinnumero'] . "</td>";
        echo "<td><a href=muokkaa_käyttäjä.php?id=" . $row['idKayttaja'] . ">Muokkaa</a></td>";
        echo "<td><a href=poista_käyttäjä.php?id=" . $row['idKayttaja'] . ">Poista</a></td>";
        echo "</tr>";
        echo "</form>";
        }
        echo "</table>";
    ?>
  </body>
</html>
