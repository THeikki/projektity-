<?php include "includes/yhteys.php"
?>
<?php

  $idS = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idS',FILTER_SANITIZE_STRING));
  $sijoituskohde = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'skohde',FILTER_SANITIZE_STRING));
  $sijoituksenmaara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'smaara',FILTER_SANITIZE_STRING));
  $osakkeidenlukumaara = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'olukumaara',FILTER_SANITIZE_STRING));
  $osakkeenarvo = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'oarvo',FILTER_SANITIZE_STRING));
  $idK = mysqli_real_escape_stringg($conn, filter_input(INPUT_POST,'idK',FILTER_SANITIZE_STRING));

  $tallennaS = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksenmaara', '$osakkeidenlukumaara','$osakkeenarvo', '$idK')";

  if (!mysqli_query($conn, $tallennaS)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 sijoitus lisätty";

  }
?>
