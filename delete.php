<?php
require_once('producten.php');
// require_once('delete1.php');
$productid = $_GET['productid'];

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Delete the row from the database
  $result = DeleteProd($productid);
  if ($result) {
    // Redirect to the CRUD page
    header('Location: homepagina2.php');
    exit;
  } else {
    // Display an error message
    echo "Error: Row not deleted";
  }
}

// Get the row to be deleted
$row = getData($productid);
if (!$row) {
  // If the row doesn't exist, redirect to the CRUD page
  header('Location: homepagina2.php');
  exit;
}
?>

