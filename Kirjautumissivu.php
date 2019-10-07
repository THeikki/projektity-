<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kirjautumissivu</title>
    <link rel="stylesheet" href="includes/mystyle.css">
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
      <form
      <label>Käyttäjätunnus</label>
      <input type="text" id="input1" name="k_tunnus" value=""><br><br>
      <label>Salasana</label>
      <input type="password" id="input2">
      <input class="login" type="button" onclick="checkPswd()" value="Kirjaudu" />
      </form>
    </div>
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
