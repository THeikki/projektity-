<?php include_once 'yhteys.php'; ?>
<?php

  $idS = mysqli_real_escape_string($conn, $_POST['idS']);
  $sijoituskohde = mysqli_real_escape_string($conn, $_POST['sijoituskohde']);
  $sijoituksenmaara = mysqli_real_escape_string($conn, $_POST['sijoituksenmaara']);
  $osakkeidenlukumaara = mysqli_real_escape_string($conn, $_POST['osakkeidenlukumaara']);
  $osakkeenarvo = mysqli_real_escape_string($conn, $_POST['osakkeenarvo']);
  $idK = mysqli_real_escape_string($conn, $_POST['idK']);

  $sqlinsert = "INSERT INTO Sijoitukset (idSijoitukset, Sijoituskohde, Sijoituksen maara, Osakkeiden lukumaara, Osakkeen arvo)
  VALUES ('$idS', '$sijoituskohde', '$sijoituksenmaara', '$osakkeidenlukumaara','$osakkeenarvo', '$idK')";

  if (!mysqli_query($conn, $sqlinsert)) {
   echo "Ei lisätty";
  }
  else {
    echo "1 sijoitus lisätty";

  }

?>
