<?php
 function ConnectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project3";
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

 }

 function Getprod($productid){
    $conn = ConnectDb();

    $query = $conn->prepare("SELECT * FROM producten WHERE productid = $productid");
    $query->execute();
    $result = $query->fetch();

    return $result;
 }

function producten(){
    $result = GetData("producten");

    Printproducten($result);
}

function Printproducten($result){
    $table = "<table border = 1px>";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }
    $table .= "</tr>";
    foreach ($result as $row) {
        
        $table .= "<tr>";
        
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
                
        // Wijzig knopje
        $table .= "<td>". 
        "<form method='post' action='update.php?productid=$row[productid]' >       
                <button name='wzg'>Wzg</button>	 
        </form>" . "</td>";

        // verwijder knopje
        $table .= "<td>". 
        "<form method='post' action='delete.php?productid=$row[productid]' >       
                <button name='wzg'>Delete</button>	 
        </form>" . "</td>";

        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}

function updateProduct($productid, $product, $categorie, $leverancier, $prijs) {
    $conn = mysqli_connect("localhost", "root", "", "project3");

    $sql = "UPDATE producten SET product='$product', categorie='$categorie', leverancier='$leverancier', prijs=$prijs WHERE productid=$productid";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    }

}

function DeleteProd($productid) {
    $conn = ConnectDb();
   
    $sql = $conn->prepare("DELETE FROM producten WHERE productid = ?");
    return $sql->execute([$productid]);
}

function InsertProduct($product, $categorie, $leverancier, $prijs){
    $conn = mysqli_connect("localhost", "root", "", "project3");
    
    $sql = "INSERT producten SET product='$product', categorie='$categorie', leverancier='$leverancier', prijs=$prijs";

        if (mysqli_query($conn, $sql)) {
}
}

?>