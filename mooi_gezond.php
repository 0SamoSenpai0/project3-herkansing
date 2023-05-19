<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<header>
<?php
include "menu1.php";
?>
</header>
<body>
<?php 
  include "menu.php";
  include "footer.php";
?>
<div class="producten">
 <?php 

function GetData($table){
  $conn = ConnectDb();
    
  $query = $conn->prepare("SELECT * FROM producten WHERE categorie = 'mooi & gezond'");
  $query->execute();
  $result = $query->fetchall();
    
  return $result;
}
include "producten.php"; 
producten();
?>  
</div>
</body>
</html>

