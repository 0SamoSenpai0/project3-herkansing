<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Login Page</title>
</head>

<header>
<a href="homepagina2.php"><img src="img/bolcom_logo_pay-off_blauw_rgb-scaled.jpg" alt="" id="logo"></a>
   <form id="zoekbar" action="">
    <input type="text" value="typ hier wat u zoekt" id="zoeken">
   <input type="submit" id="" name="" value="zoeken"> 
   </form>
   <img src="img/zoek-removebg-preview.png" alt="" id="zoek"></img>
  </header>

  <body id="inlogbody">
  <?php
    include "menu.php";
    include "footer.php";
    ?>
    <div id="dc">
    <section>
    <div id="INLOG">
    <form  class="inl"
    action="homepagina2.php"
     method="post"  
     >
        <h1 id="inlogh1">Inloggen</h1><br>
        <label class="inloglabel" for="gebruikersnaam">Gebruikersnaam:</label>
        <input class="inloginput" type="text" name="gebruikersnaam" id="gebruikersnaam" required>
        <br>
        <label class="inloglabel" for="password">Wachtwoord:</label>
        <input class="inloginput" type="password" name="password" id="password" required>
        <br>
        <input class="inlogsubmit" type="submit" value="Log in" name="submit"> terug naar home <br>
        </form> <br>
    </div>
    </section>

</div>

</body>
</html>

<?php
//  $username = "username";
//  $password = "password";
?>
