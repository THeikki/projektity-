<?php include 'includes/yhteys.php'; ?>
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
  </body>
  <body>
    <?php
      $sql = "SELECT * FROM Kayttaja;";
      $result = mysqli_query($conn, $sql);

      if(isset($_POST['update'])) {
        $Updatequery = "UPDATE Kayttaja SET idKayttaja='$_POST[idKayttaja]', Etunimi='$_POST[Etunimi]', Sukunimi='$_POST[Sukunimi]', Osoite='$_POST[Osoite]', Puhelinnumero='$_POST[Puhelinnumero]', WHERE idKayttaja='$_POST[hidden]'";
        mysqli_query($Updatequery, $conn);
      };
      if(isset($_POST['delete'])) {
        $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_POST[hidden]'";
        mysqli_query($Deletequery, $conn);
      };

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
        echo "<td>" . "<input type="submit" name="update" value="update" . " </td>;
        echo "<td>" . "<input type="submit" name="delete" value="delete" . " </td>;
        echo "</tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>
