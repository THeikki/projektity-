<?php include "includes/yhteys.php"
?>
<?php
if(isset($_GET['edit'])){
 $sql = "SELECT * FROM data WHERE empid =" .$_GET['edit'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
 $etunimi = $_POST['Etunimi'];
 $sukunimi = $_POST['Sukunimi'];
 $osoite = $_POST['Osoite'];
 $puhelinnumero = $_POST['Puhelinnumero'];
 $update = "UPDATE Kayttaja SET Etunimi='$name', Sukunimi='$gender',Osoite='$department',Puhelinnumero='$address' WHERE idKayttaja=". $_GET['edit'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: Käyttäjä.php");
 }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<body>
<form method="post">
<h1>Muokkaa käyttäjätietoja</h1>
<label>Etunimi:</label><input type="text" name="Etunimi" placeholder="Etunimi" value="<?php echo $row['Etunimi']; ?>"><br/><br/>
<label>Sukunimi:</label><input type="text" name="Sukunimi" placeholder="Sukunimi" value="<?php echo $row['Sukunimi']; ?>"><br/><br/>
<label>Osoite:</label><input type="text" name="Osoite" placeholder="Osoite" value="<?php echo $row['Osoite']; ?>"><br/><br/>
<label>Puhelinnumero:</label><input type="text" name="Puhelinnumero" placeholder="Puhelinnumero" value="<?php echo $row['Puhelinnumero']; ?>"><br/><br/>
<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="disp.php"><button type="button" value="button">Cancel</button></a>
</form>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>
