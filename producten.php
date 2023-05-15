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



 function PrintTableTest($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";
    // print elke rij
    foreach ($result as $row) {
        echo "<br> rij:";
        
        foreach ($row as  $value) {
            echo "kolom" . "$value";
        }          
        
    }
}

// Function 'PrintTable' print een HTML-table met data uit $result.
function PrintTable($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";

    // Print header table

    // haal de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }

    // print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}


function producten(){

    // Haal alle bier record uit de tabel 
    $result = GetData("producten");
    
    //print table
    Printproducten($result);
 }
function Printproducten($result){
    // Zet de hele table in een variable en print hem 1 keer 
    $table = "<table border = 1px>";

    // Print header table

    // haal de kolommen uit de eerste [0] van het array $result mbv array_keys
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }
    $table .= "</tr>";
    // print elke rij
    foreach ($result as $row) {
        
        $table .= "<tr>";
        // print elke kolom
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        // $table .= "</tr>";
        
        // Wijzig knopje
        $table .= "<td>". 
        "<form method='post' action='update.php?productid=$row[productid]' >       
                <button name='wzg'>Wzg</button>	 
        </form>" . "</td>";

    // Delete via linkje href
    // $table .= '<td><a href="delete_bier.php?productid='.$row["productid"].'">verwijder</a></td>';
    $table .= "<td>". 
    "<form method='post' action='delete.php?productid=$row[productid]' >       
            <button name='wzg'>Delete</button>	 
    </form>" . "</td>";


    $table .= "<td>". 
    "<form method='post' action='invoegen.php?productid=$row[productid]' >       
            <button name='wzg'>toevoegen</button>	 
    </form>" . "</td>";

        $table .= "</tr>";
    }
    $table.= "</table>";

    echo $table;
}

function updateProduct($productid, $product, $categorie, $leverancier, $prijs) {
    // Create a connection to the database
    $conn = mysqli_connect("localhost", "root", "", "project3");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query
    $sql = "UPDATE producten SET product='$product', categorie='$categorie', leverancier='$leverancier', prijs=$prijs WHERE productid=$productid";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    }

}

function DeleteProd($productid) {
    $conn = connectdb();
   

    $sql = $conn->prepare("DELETE FROM producten WHERE productid = ?");
    return $sql->execute([$productid]);
  }

  function InsertProduct($product, $categorie, $leverancier, $prijs){

    $conn = mysqli_connect("localhost", "root", "", "project3");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "INSERT producten SET product='$product', categorie='$categorie', leverancier='$leverancier', prijs=$prijs";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    }
  }
?>