<?php
session_start();
$message="";
if(count($_POST)>0) {
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn,"SELECT * FROM shopping_cart_login WHERE username = '" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];
$_SESSION["email"] = $row[3];
$_SESSION["phone"] = $row[2];    
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"]))
{
   if(isset($_SESSION["password"])){
       header("Location:index.php");
   }
}
?>