<?php include "includes/yhteys.php"
?>
<?php

if(isset($_POST['update'])) {
        $Updatequery = "UPDATE Kayttaja SET Etunimi='$_POST[etunimi]', Sukunimi='$_POST[sukunimi]', Osoite='$_POST[osoite]', Puhelinnumero='$_POST[puhelinnumero]' WHERE idKayttaja='$_POST[hidden]'";
        mysqli_query($conn, $Updatequery) or die(mysqli_error($conn));
          echo "Käyttäjä muokattiin onnistuneesti!";
}


$sql = "SELECT * FROM Kayttaja";
$mydata = mysqli_query($conn, $sql);
echo "<table border=2>
<tr>
<th>idKayttaja</th>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Osoite</th>
<th>Puhelinnumero</th>
</tr>";


while($record = mysqli_fetch_array($mydata)) {
echo "<form action=muokkaa_käyttäjä.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=number name=idKayttaja value=" . $record['idKayttaja'] . " </td>";
echo "<td>" . "<input type=text name=etunimi value=" . $record['Etunimi'] . " </td>";
echo "<td>" . "<input type=text name=sukunimi value=" . $record['Sukunimi'] . " </td>";
echo "<td>" . "<input type=text name=osoite value=" . $record['Osoite'] . " </td>";
echo "<td>" . "<input type=text name=puhelinnumero value=" . $record['Puhelinnumero'] . " </td>";
echo "<td>" . "<input type=hidden name=idKayttaja value=" . $record['idKayttaja'] . " </td>";
echo "<td>" . "<input type=submit name=update value=Muokkaa" . " </td>";
echo "</tr>";
echo "</form>";

echo "</table>";

?>
