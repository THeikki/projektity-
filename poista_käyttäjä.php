<?php include "includes/yhteys.php"
?>
<?php

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_GET[idKayttaja]'";
  mysqli_query($conn, $Deletequery);

?>
