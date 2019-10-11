<?php include "includes/yhteys.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lainat</title>
    <link rel="stylesheet" href="includes/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="Pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="Kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="Käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="Tilit.php" class="button1">Tilit</a>
    <a href="Sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="Lainat.php" class="button2">Lainat</a>
    <hr class="line">

    <?php

      $sql = "SELECT * FROM Lainat;";
      $result = mysqli_query($conn, $sql);

      echo "<table border='1'>
        <tr>
        <th>idLainat</th>
        <th>Lainan_nimi</th>
        <th>Lainan_maara</th>
        <th>Lainan_korko</th>
        <th>idKayttaja</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['idLainat'] . "</td>";
        echo "<td>" . $row['Lainan_nimi'] . "</td>";
        echo "<td>" . $row['Lainan_maara'] . "</td>";
        echo "<td>" . $row['Lainan_korko'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td><a href=poista_käyttäjä.php?id=" . $row['idKayttaja'] . ">Poista</a></td>";
        echo "<td><a href=poista_käyttäjä.php?id=" . $row['idKayttaja'] . ">Poista</a></td>";
        echo "</tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>
