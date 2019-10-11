<?php include "includes/yhteys.php"
?>
<?php

  mysqli_select_db($conn, 't9tohe00');

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja=$_POST[id]";

  if(mysqli_query($Deletequery, $conn))
    header("refresh:1; url=Käyttäjä.php");
  else
    echo "Ei poistettu";

?>
