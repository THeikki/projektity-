<?php include_once 'includes/yhteys.php';
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
  </body>
  <body>
    <?php
      $sql = "SELECT * FROM Tilit;";
      $result = mysqli_query($conn, $sql);

      echo "<table border='1'>
        <tr>
        <th>idTilit</th>
        <th>Tilin nimi</th>
        <th>Tilin aloituspaiva</th>
        <th>Tilin saldo</th>
        <th>Tilin korko</th>
        <th>idKayttaja</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['idTilit'] . "</td>";
        echo "<td>" . $row['Tilin nimi'] . "</td>";
        echo "<td>" . $row['Tilin aloituspaiva'] . "</td>";
        echo "<td>" . $row['Tilin saldo'] . "</td>";
        echo "<td>" . $row['Tilin korko'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>
