<?php
echo "<h1> bent u zeker dat u deze product wilt verwijderen</h1>";
require_once('producten.php');

$productid = $_GET['productid'];
$row = Getprod($productid);

if (isset($_POST['btn_wzg'])) {
    $product = $_POST['product'];
    $categorie = $_POST['categorie'];
    $leverancier = $_POST['leverancier'];
    $prijs = $_POST['Prijs'];
    $productid = $_POST['productid'];


}

?>

<html>
    <body>
        <form method="post" action="delete.php">
        <br>
        productid:<input type="" name="productid" value="<?php echo $_GET['productid'];?>"><br>
        product:<input type="" name="product" value="<?php echo $row['product'];?>"><br>
        categorie:<input type="" name="categorie" value="<?php echo $row['categorie'];?>"><br>
        leverancier:<input type="" name="leverancier" value="<?php echo $row['leverancier'];?>"><br>
        Prijs:<input type="" name="Prijs" value="<?php echo $row['Prijs'];?>"><br>
      
        <input type="submit" name="btn_wzg" value="ja"><br>
        <!-- <a href="delete.php"><input type="button" name="terug" value="ja"> </a> -->
        <a href="homepagina2.php"><input type="button" name="terug" value="nee"> </a>
        </form>
    </body>
</html>
