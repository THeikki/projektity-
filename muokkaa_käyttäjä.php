<?php include "includes/yhteys.php"
?>
<?php

if(isset($_POST['update'])) {
        $Updatequery = "UPDATE Kayttaja SET Etunimi='$_POST[etunimi]', Sukunimi='$_POST[sukunimi]', Osoite='$_POST[osoite]', Puhelinnumero='$_POST[puhelinnumero]' WHERE idKayttaja='$_POST[hidden]'";
        mysqli_query($conn, $Updatequery) or die(mysqli_error($conn));
          echo "Käyttäjä muokattiin onnistuneesti!";
}


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
  echo "<td><a href=muokkaa_käyttäjä.php?update=" . $row['idKayttaja'] . ">Muokkaa</a></td>";
  echo "<td><a href=poista_käyttäjä.php?delete=" . $row['idKayttaja'] . ">Poista</a></td>";
  echo "</tr>";
  echo "</form>";
  }
  echo "</table>";
?>
