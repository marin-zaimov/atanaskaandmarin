<?php

function getGuest($email) {

  include "dbCreds.php";
  try {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

  //TODO(Marin): send back all fields here
    $sql = "SELECT id, email, firstName, lastName, rsvp, language, emailOwner FROM guests";
    $result = $conn->query($sql);

    $emailToSearchFor = $email;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            if ($emailToSearchFor == $row['email']) {
              return $row;
            }
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
  }
  catch (Exception $e) {
  }
  return null;
}
?>