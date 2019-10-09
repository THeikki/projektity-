<?php include 'includes/yhteys.php'; ?>
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
  </body>
  <body>
    <?php
      $sql = "SELECT * FROM Sijoitukset;";
      $result = mysqli_query($conn, $sql);

      if(isset($_POST['update'])) {
        $Updatequery = "UPDATE Sijoitukset SET idSijoitukset='$_POST[idSijoitukset]', Sijoituskohde='$_POST[Sijoituskohde]', Sijoituksen summa='$_POST[Sijoituksen summa]', Osakkeiden lukumaara='$_POST[Osakkeiden lukumaara]', Osakkeen arvo='$_POST[Osakkeen arvo]', WHERE idSijoitukset='$_POST[hidden]'";
        mysqli_query($Updatequery, $conn);
      }
      if(isset($_POST['delete'])) {
        $Deletequery = "DELETE FROM Sijoitukset WHERE idSijoitukset='$_POST[hidden]'";
        mysqli_query($Deletequery, $conn);
      }


      echo "<table border='1'>
        <tr>
        <th>idSijoitukset</th>
        <th>Sijoituskohde</th>
        <th>Sijoituksen summa</th>
        <th>Osakkeiden lukumaara</th>
        <th>Osakkeen arvo</th>
        <th>idKayttaja</th>
        </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo"<form action=Kayttaja.php method=post>";
        echo "<tr>";
        echo "<td>" . $row['idSijoitukset'] . "</td>";
        echo "<td>" . $row['Sijoituskohde'] . "</td>";
        echo "<td>" . $row['Sijoituksen summa'] . "</td>";
        echo "<td>" . $row['Osakkeiden lukumaara'] . "</td>";
        echo "<td>" . $row['Osakkeen arvo'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td>" . "<input type=submit name=update value=update" . " </td>";
        echo "<td>" . "<input type=submit name=delete value=delete" . "</td>";
        echo "</tr>";
        echo "</form>";
        }
        echo "</table>";
    ?>
  </body>
</html>
