<!DOCTYPE html>
<?php include "yhteys.php"?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pääsivu</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <body>
    <a href="pääsivu.php" class="main_button">VERKKOPANKKI</a>
    <a href="kirjautumissivu.php" class="logout">LOPETA</a><br>
    <a href="käyttäjä.php" class="button1">Käyttäjä</a>
    <a href="tilit.php" class="button1">Tilit</a>
    <a href="sijoitukset.php" class="button1">Sijoitukset</a>
    <a href="lainat.php" class="button1">Lainat</a>
    <hr class="line">
    <div id="box5">
      <div class="box" id="box1">
        <h2>Käyttäjätiedot</h2>
        <form class="" action="" methot="post">
          <input type="text" name="id" value="" placeholder="id_käyttäjä"> <br><br>
          <input type="text" name="en" value="" placeholder="Etunimi"> <br><br>
          <input type="text" name="sn" value="" placeholder="Sukunimi"> <br><br>
          <input type="text" name="os" value="" placeholder="Osoite"> <br><br>
          <input type="text" name="pn" value="" placeholder="Puhelinnumero"> <br><br>
          <input type="submit" name="" value="Aseta">
      </div>
      <?php
      $stmt=$db->prepare ("INSERT INTO käyttäjä VALUES(:id, :en, :sn, :os, :pn)");
      $stmt->bindParam(': id', $_POST['id']);
      $stmt->bindParam(': en', $_POST['en']);
      $stmt->bindParam(': sn', $_POST['sn']);
      $stmt->bindParam(': os', $_POST['os']);
      $stmt->bindParam(': pn', $_POST['pn']);

      $stmt->execute();
      ?>
      <div class="box" id="box2">
        <h2>Tilitiedot</h2>
        <form class="" action="" methot="post">
          <input type="text" name="id" value="" placeholder="id_Tilit"> <br><br>
          <input type="text" name="tn" value="" placeholder="Tilin nimi"> <br><br>
          <input type="text" name="ta" value="" placeholder="Tilin aloituspäivä"> <br><br>
          <input type="text" name="ts" value="" placeholder="Tilin saldo €"> <br><br>
          <input type="text" name="tk" value="" placeholder="Tilin korko %"> <br><br>
          <input type="submit" name="" value="Aseta">
      </div>
      <?php
      $stmt=$db->prepare ("INSERT INTO tilit VALUES(:id, :tn, :ta, :ts, :tk)");
      $stmt->bindParam(': id', $_POST['id']);
      $stmt->bindParam(': tn', $_POST['tn']);
      $stmt->bindParam(': ta', $_POST['ta']);
      $stmt->bindParam(': ts', $_POST['ts']);
      $stmt->bindParam(': tk', $_POST['tk']);

      $stmt->execute();
      ?>
      <div class="box" id="box3">
        <h2>Sijoitustiedot</h2>
        <form class="" action="" methot="post">
          <input type="text" name="id" value="" placeholder="id_Sijoitukset"> <br><br>
          <input type="text" name="sk" value="" placeholder="Sijoituskohde"> <br><br>
          <input type="text" name="sm" value="" placeholder="Sijoituksen määrä €"> <br><br>
          <input type="text" name="ol" value="" placeholder="Osakkeiden lukumäärä kpl"> <br><br>
          <input type="text" name="oa" value="" placeholder="Osakkeen arvo €"> <br><br>
          <input type="submit" name="" value="Aseta">
      </div>
      <?php
      $stmt=$db->prepare ("INSERT INTO sijoitukset VALUES(:id, :sk, :sm, :ol, :oa)");
      $stmt->bindParam(': id', $_POST['id']);
      $stmt->bindParam(': sk', $_POST['sk']);
      $stmt->bindParam(': sm', $_POST['sm']);
      $stmt->bindParam(': ol', $_POST['ol']);
      $stmt->bindParam(': oa', $_POST['oa']);

      $stmt->execute();
      ?>
      <div class="box" id="box4">
        <h2>Lainatiedot</h2>
        <form class="" action="" methot="post">
          <input type="text" name="id" value="" placeholder="id_Lainat"> <br><br>
          <input type="text" name="li" value="" placeholder="Lainan nimi"> <br><br>
          <input type="text" name="lo" value="" placeholder="Lainan ottopäivä"> <br><br>
          <input type="text" name="lm" value="" placeholder="Lainan määrä €"> <br><br>
          <input type="text" name="lk" value="" placeholder="Lainan korko %"> <br><br>
          <input type="submit" name="" value="Aseta">
      </div>
      <?php
      $stmt=$db->prepare ("INSERT INTO käyttäjä VALUES(:id, :li, :lo, :lm, :lk)");
      $stmt->bindParam(': id', $_POST['id']);
      $stmt->bindParam(': li', $_POST['li']);
      $stmt->bindParam(': lo', $_POST['lo']);
      $stmt->bindParam(': lm', $_POST['lm']);
      $stmt->bindParam(': lk', $_POST['lk']);

      $stmt->execute();
      ?>
    </div>
  </body>
</html>
