<!DOCTYPE html>
<html>
<body>

<?php

$host='jukkajauhiainen.ipt.oamk.fi';
$dbname='t9tohe00';
$username='t9tohe00';
$password='Zakkeus1984';

$con=mysqli_connect($host,$username,$password,$dbname);
if (mysqli_connect_errno()) {
echo "Fail !";
}
else {
echo "OK";
}
mysqli_close($con);

?>
<p>
</body>
</html>
