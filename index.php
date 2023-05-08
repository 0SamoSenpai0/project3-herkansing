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
    <!-- <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="about.php">over</a> -->
   <img src="img/bolcom_logo_pay-off_blauw_rgb-scaled.jpg" alt="" id="logo">
   <form action="">
    <input type="text" value="typ hier wat u zoekt" id="zoeken">
   <input type="submit" id="" name="" value="zoeken"> 
   </form>
   <img src="img/zoek-removebg-preview.png" alt="" id="zoek"></img>

   
  

   <!-- <div id="inlog">
    <button class="inlog" type="button"> <a id="Inlog_a" href="inlogpagina.html"><p1>inloggen</p1></a></button>
   </div> -->
   <div id="inlog">
    <a class="inlog" id="Inlog_a" href="inlog.php"><p1>inloggen</p1></a>
    <?php include "process_login.php";?>
    

</div>
<a href="inlog.php"><img src="img/heart.png" alt="" id="favorites" ></a> 
<a href="inlog.php"><img src="img/winkelwagentje.png" alt="" id="winkelwagentje"></a>

</header>
<body>
  <?php
  include "menu.php";
  ?>
      


<img src="img/bol.com homepage.png" alt="" id="imgt">





</body>




</html>