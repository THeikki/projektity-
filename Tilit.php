<?php include 'includes/yhteys.php'; ?>
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

      if(isset($_POST['update'])) {
        $Updatequery = "UPDATE Tilit SET idTilit='$_POST[idTilit]', Tilin nimi='$_POST[Tilin nimi]', Tilin saldo='$_POST[Tilin saldo]', Tilin korko='$_POST[Tilin korko]', idKayttaja='$_POST[idKayttaja]', WHERE idTilit='$_POST[hidden]'";
        mysqli_query($Updatequery, $conn);
      }
      if(isset($_POST['delete'])) {
        $Deletequery = "DELETE FROM Tilit WHERE idTilit='$_POST[hidden]'";
        mysqli_query($Deletequery, $conn);
      }


      echo "<table border='1'>
        <tr>
        <th>idTilit</th>
        <th>Tilin nimi</th>
        <th>Tilin saldo</th>
        <th>Tilin korko</th>
        <th>idKayttaja</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo"<form action=Kayttaja.php method=post>";
        echo "<tr>";
        echo "<td>" . $row['idTilit'] . "</td>";
        echo "<td>" . $row['Tilin nimi'] . "</td>";
        echo "<td>" . $row['Tilin saldo'] . "</td>";
        echo "<td>" . $row['Tilin korko'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td>" . "<input type=submit name=update value=update" . " </td>";
        echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
        echo "</tr>";
        echo "</form>";
        }
        echo "</table>";
    ?>
  </body>
</html>
