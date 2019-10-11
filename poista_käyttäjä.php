<?php include "includes/yhteys.php"
?>
<?php

  if(isset($_POST['delete'])) {
        $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja='$_GET[idKayttaja]'";
        mysqli_query($Deletequery, $conn);
      }
  header("Location: Käyttäjä.php");

?>
