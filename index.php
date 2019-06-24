<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$login="Christy";
$pwd="123456";

$sqlLogin = "SELECT Nom"
        . " FROM utilisateur"
        . " WHERE Pseudo ='" . $login . "' AND Password = '" . $pwd . "';";
$requete = mysqli_query($conn, $sqlLogin);
echo "$requete";
?>
