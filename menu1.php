<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>bol.nl</title>
</head>
    
<header>
   <a href="homepagina2.php"><img src="img/bolcom_logo_pay-off_blauw_rgb-scaled.jpg" alt="" id="logo"></a>
   <form id="zoekbar" action="">
    <input type="text" value="typ hier wat u zoekt" id="zoeken">
   <input type="submit" id="" name="" value="zoeken"> 
   </form>
   <img src="img/zoek-removebg-preview.png" alt="" id="zoek"></img>

   <div id="menu1">
   
   <a href="#" id="account">
      <?php
      include "process_login.php";
      if (isset($_SESSION["username"])) {
        echo "Welkom, " . htmlspecialchars($_SESSION["username"]);
    }
      ?></a>
</div>
<!-- <a href="account.php"> -->
    <img src="img/persoonicoontje.png" id="persoon">
<!-- </a> -->
</header>
</html>


  
