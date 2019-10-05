<?php
$stmt=$db->prepare ("INSERT INTO sijoitukset VALUES(:id, :sk, :sm, :ol, :oa)");
$stmt->bindParam(': id', $_POST['id']);
$stmt->bindParam(': sk', $_POST['sk']);
$stmt->bindParam(': sm', $_POST['sm']);
$stmt->bindParam(': ol', $_POST['ol']);
$stmt->bindParam(': oa', $_POST['oa']);

$stmt->execute();
?>
