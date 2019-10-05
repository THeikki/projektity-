<?php
$stmt=$db->prepare ("INSERT INTO tilit VALUES(:id, :tn, :ta, :ts, :tk)");
$stmt->bindParam(': id', $_POST['id']);
$stmt->bindParam(': tn', $_POST['tn']);
$stmt->bindParam(': ta', $_POST['ta']);
$stmt->bindParam(': ts', $_POST['ts']);
$stmt->bindParam(': tk', $_POST['tk']);
?>
