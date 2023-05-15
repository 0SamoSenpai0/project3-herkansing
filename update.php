<?php
// echo "<h1>Update</h1>";
require_once('producten.php');


// echo "Data uit het vorige formulier:<br>";
// Haal alle info van de betreffende productid $_GET['productid']
$productid = $_GET['productid'];
$row = Getprod($productid);

if (isset($_POST['btn_wzg'])) {
    $product = $_POST['product'];
    $categorie = $_POST['categorie'];
    $leverancier = $_POST['leverancier'];
    $prijs = $_POST['Prijs'];
    $productid = $_POST['productid'];

    $result = updateProduct($productid, $product, $categorie, $leverancier, $prijs);
if ($result) {
    echo "Product is bijgewerkt.";
} 
}

?>

<html>
<head>
   <link rel="stylesheet" href="crud.css"> 
</head>
<header>
</header>
    <body>
        <!-- <h1>Update</h1><br> -->

        <form method="post" >
        <br>
        productid:<input type="" name="productid" value="<?php echo $_GET['productid'];?>"><br>
        product:<input type="" name="product" value="<?php echo $row['product'];?>"><br>
        categorie:<input type="" name="categorie" value="<?php echo $row['categorie'];?>"><br>
        leverancier:<input type="" name="leverancier" value="<?php echo $row['leverancier'];?>"><br>
        Prijs:<input type="" name="Prijs" value="<?php echo $row['Prijs'];?>"><br>
    
        <a href="homepagina2.php"><input type="submit" name="btn_wzg" value="Wijzigen"><br></a>
        <a href="homepagina2.php"><input type="button" name="terug" value="terug"> </a>
        </form>
    </body>
</html>
