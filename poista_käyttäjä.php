<?php include "includes/yhteys.php"
?>
<?php

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_POST[id]'";

  if(mysqli_query($conn,$Deletequery))
    header("refresh:1; location: Käyttäjä.php");
  else
    echo "Käyttäjää ei poistettu!";
?>
