<?php include "includes/yhteys.php"
?>
<?php

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_POST[id]'";

  if(mysqli_query($conn, $Deletequery)) {
    echo "Käyttäjä poistettiin";
    header("refresh:2 Location: Käyttäjä.php");
  }

  else
    echo "Käyttäjää ei poistettu";
?>
