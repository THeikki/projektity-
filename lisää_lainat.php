<?php
$stmt=$db->prepare ("INSERT INTO käyttäjä VALUES(:id, :li, :lo, :lm, :lk)");
$stmt->bindParam(': id', $_POST['id']);
$stmt->bindParam(': li', $_POST['li']);
$stmt->bindParam(': lo', $_POST['lo']);
$stmt->bindParam(': lm', $_POST['lm']);
$stmt->bindParam(': lk', $_POST['lk']);

$stmt->execute();
?>
