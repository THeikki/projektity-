<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sijoitukset</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  </style>
  <body>
    <a href="pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="tilit.php" class="button1">Tilit</a>
    <a href="sijoitukset.php" class="button2">Sijoitukset</a>
    <a href="lainat.php" class="button1">Lainat</a>
    <hr class="line">
  </body>
  <table>
    <thead>
      <tr>
        <th>id_Sijoitukset</th>
        <th>Sijoituskohde</th>
        <th>Sijoituksen summa</th>
        <th>Osakkeiden lukumäärä</th>
        <th>Osakkeen arvo</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($Sijoitukset as $row) {
        echo '<tr>';
        echo '<td>' .$row['id_Sijoitukset'].'>/td>';
        echo '<td>' .$row['Sijoituskohde'].'>/td>';
        echo '<td>' .$row['Sijoituksen summa'].'>/td>';
        echo '<td>' .$row['Osakkeiden lukumäärä'].'>/td>';
        echo '<td>' .$row['Osakkeen arvo'].'>/td>';
      }
      ?>
    </tbody>
  </table>
</html>
