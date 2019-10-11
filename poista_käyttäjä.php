<?php include "includes/yhteys.php"
?>
<?php

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_GET[idKayttaja]'";

  if(mysqli_query($conn, $Deletequery)) {
    echo "Käyttäjä poistettiin";
    header("Location: Käyttäjä.php");
  }

  else
    echo "Käyttäjää ei poistettu";
?>
