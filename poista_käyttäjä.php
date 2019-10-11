<?php include "includes/yhteys.php"
?>
<?php

if(isset($_POST['delete'])) {
      $Deletequery = "DELETE FROM Kayttaja WHERE idKayttaja=$_POST[hidden]";
      mysqli_query($Deletequery, $conn);
    }
?>
