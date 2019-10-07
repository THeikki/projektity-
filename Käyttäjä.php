<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>käyttäjä</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="käyttäjä.php" class="button2">Käyttäjä</a>
    <a href="tilit.php" class="button1">Tilit</a>
    <a href="sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="lainat.php" class="button1">Lainat</a>
    <hr class="line">
  </body>
  <table>
    <thead>
      <tr>
        <th>id_Käyttäjä</th>
        <th>Etunimi</th>
        <th>Sukunimi</th>
        <th>Osoite</th>
        <th>Puhelinnumero</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $Tilit=$db->query('SELECT * FROM Tilit');

      foreach ($Käyttäjä as $row) {
        echo '<tr>';
        echo '<td>' .$row['id_Käyttäjä'].'>/td>';
        echo '<td>' .$row['Etunimi'].'>/td>';
        echo '<td>' .$row['Sukunimi'].'>/td>';
        echo '<td>' .$row['Osoite'].'>/td>';
        echo '<td>' .$row['Puhelinnumero'].'>/td>';
      }
      ?>
    </tbody>
  </table>
</html>
