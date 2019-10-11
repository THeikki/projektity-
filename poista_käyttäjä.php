<?php include "includes/yhteys.php"
?>
<?php

  $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_POST[id]'";

  $query_run = mysqli_query($conn, $Deletequery);

  if($query_run) {
    echo '<script> alert("Käyttäjä poistettiin!")</script>';
  }
else {
  echo '<script> alert("Käyttäjää ei poistettu!")</script>';
}
?>
