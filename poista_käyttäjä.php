<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_GET['del'])) {
    $idKayttaja = $_GET['del'];
    $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$idKayttaja'";
    $result = mysqli_query($conn, $Deletequery) or die("Virhe". mysqli_error());
  }
?>
