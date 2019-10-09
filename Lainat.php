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

      if(isset($_POST['update'])) {
        $Updatequery = "UPDATE Lainat SET idLainat=$_POST[idLainat], Lainan nimi=$_POST[Lainan nimi], Lainan maara=$_POST[Lainan maara], Lainan korko=$_POST[Lainan korko], WHERE idSijoitukset=$_POST[hidden]";
        mysqli_query($Updatequery, $conn);
      };
      if(isset($_POST['delete'])) {
        $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja=$_POST[hidden]";
        mysqli_query($Deletequery, $conn);
      };


      $sql = "SELECT * FROM Lainat;";
      $result = mysqli_query($conn, $sql);

      echo "<table border='1'>
      <tr>
      <th>idLainat</th>
      <th>Lainan nimi</th>
      <th>Lainan maara</th>
      <th>Lainan korko</th>
      <th>idKayttaja</th>
      </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo"<form action=Lainat.php method=post>";
        echo "<tr>";
        echo "<td>" . $row['idLainat'] . "</td>";
        echo "<td>" . $row['Lainan nimi'] . "</td>";
        echo "<td>" . $row['Lainan maara'] . "</td>";
        echo "<td>" . $row['Lainan korko'] . "</td>";
        echo "<td>" . $row['idKayttaja'] . "</td>";
        echo "<td>" . "<input type=submit name=update value=Muokkaa" . " </td>";
        echo "<td>" . "<input type=submit name=delete value=Poista" . " </td>";
        echo "</tr>";
        echo "</form>";
        }
        echo "</table>";
    ?>
  </body>
</html>
