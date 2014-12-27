<?php
$servername = "localhost";
$username = "root";
$password = "marin";
$dbname = "atanaskaandmarin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, email, firstname, lastname FROM guests";
$result = $conn->query($sql);

$emailFound = false;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>