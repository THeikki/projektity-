<?php include "includes/yhteys.php"
?>
<?php

if(isset($_GET['delete'])) {
    $idKayttaja = $_GET['delete'];
    $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$idKayttaja'";
    $result = mysqli_query($conn, $Deletequery) or die(mysqli_error());
  }
?>
