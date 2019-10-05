<?php
$stmt=$db->prepare ("INSERT INTO käyttäjä VALUES(:id, :en, :sn, :os, :pn)");
$stmt->bindParam(': id', $_POST['id']);
$stmt->bindParam(': en', $_POST['en']);
$stmt->bindParam(': sn', $_POST['sn']);
$stmt->bindParam(': os', $_POST['os']);
$stmt->bindParam(': pn', $_POST['pn']);

$stmt->execute();
?>
