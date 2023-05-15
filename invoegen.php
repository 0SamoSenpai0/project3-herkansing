<?php
require_once('producten.php');

if(isset($_POST['btn_toevoegen'])){
    $product = $_POST['product'];
    $categorie = $_POST['categorie'];
    $leverancier = $_POST['leverancier'];
    $prijs = $_POST['prijs'];
    
   $result = insertProduct( $product, $categorie, $leverancier, $prijs);
    echo "Product toegevoegd!";
}
?>

<html>
<head>
   <link rel="stylesheet" href="crud.css"> 
</head>
    <body>
        <!-- <h1>Invoegen</h1><br> -->
        <form method="post">
            product:<input type="" name="product"><br>
            categorie:<input type="" name="categorie"><br>
            leverancier:<input type="" name="leverancier"><br>
            Prijs(alleen nummers):<input type="" name="prijs"><br>
            <a href="homepagina2.php"><input type="submit" name="btn_toevoegen" value="Toevoegen"><br></a>
            <a href="homepagina2.php"><input type="button" name="terug" value="terug"> </a>
        </form>
    </body>
</html>