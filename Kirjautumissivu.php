<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kirjautumissivu</title>
    <link rel="stylesheet" href="css/mystyle.css">
  </head>
  <style>
  .login
  {
    margin-top: 50px
  }
  </style>
  <body>
    <hr class="line">
    <div class="box">
      <label>Käyttäjätunnus</label>
      <input type="text" id="input1" name="k_tunnus" value=""><br><br>
      <form>
      <label>Salasana</label>
      <input type="password" id="input2">
      <a href="Pääsivu.php"class="login">Kirjaudu< onclick="checkPswd();"/a>

  </form>
  <!--Function to check password the already set password is admin-->
  <script type="text/javascript">
      function checkPswd() {
          var confirmPassword = "admin";
          var password = document.getElementById("input2").value;
          if (password == confirmPassword) {
               window.location="Pääsivu.php";
          }
          else{
              alert("Väärä salasana");
          }
      }
  </script>
      </body>
</html>
