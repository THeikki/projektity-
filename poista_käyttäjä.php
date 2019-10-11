<?php include "includes/yhteys.php"
?>
<?php

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_GET[idKayttaja]'";


  if(mysqli_query($conn, $Deletequery)) {
    echo "Käyttäjä poistettiin";
    header("refresh:1; url=Käyttäjä.php");
  }

  else
    echo "Käyttäjää ei poistettu";
?>
