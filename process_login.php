<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["gebruikersnaam"];
//     $password = $_POST["password"];

//     if (isset($_POST["submit"])) {

//     $servername = "localhost";
//     $db_username = "root";
//     $db_password = "";
//     $dbname = "project3";

//     $conn = new mysqli($servername, $db_username, $db_password, $dbname);
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $stmt = $conn->prepare("SELECT gebruikersnaam FROM account WHERE gebruikersnaam = ?");
//     if (!$stmt) {
//         die("Error preparing query: " . $conn->error);
//     }
//     $stmt->bind_param("s", $username);
//     if (!$stmt->execute()) {
//         die("Error executing query: " . $stmt->error);
//     }
//     $stmt->store_result();
//     if ($stmt->num_rows > 0) {
//         die("Username already exists");
//     }

//         $stmt = $conn->prepare("INSERT INTO account (gebruikersnaam, password) VALUES (?, ?)");
//     if (!$stmt) {
//         die("Error preparing query: " . $conn->error);
//     }
//     $stmt->bind_param("ss", $username, $password);
//     if (!$stmt->execute()) {
//         die("Error executing query: " . $stmt->error);
//     }

//     $last_user_id = $conn->insert_id;

//     $stmt->close();
//     $conn->close();

//     echo 
//     nl2br("hallo\n" . 
//       htmlspecialchars($username));
//     }
// }
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["gebruikersnaam"];
    $password = $_POST["password"];

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "project3";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Username check
    $stmt = $conn->prepare("SELECT gebruikersnaam FROM account WHERE gebruikersnaam = ?");
    if (!$stmt) {
        die("Error preparing query: " . $conn->error);
    }
    $stmt->bind_param("s", $username);
    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        die("Username already exists");
    }

    $stmt = $conn->prepare("INSERT INTO account (gebruikersnaam, password) VALUES (?, ?)");
    if (!$stmt) {
        die("Error preparing query: " . $conn->error);
    }
    $stmt->bind_param("ss", $username, $password);
    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    }

    // Store the logged-in user's information in session variables
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    $stmt->close();
    $conn->close();

    // Redirect to homepagina2.php
    header("Location: homepagina2.php");
    exit;
}
?>
