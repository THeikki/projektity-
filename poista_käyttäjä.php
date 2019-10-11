<?php include "includes/yhteys.php"
?>
<?php

if(isset($_POST['delete'])) {
      $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja=$_POST[idKayttaja]";
      mysqli_query($Deletequery, $conn) or die(mysqli_error());
    }
?>
