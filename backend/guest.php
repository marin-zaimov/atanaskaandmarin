<?php

function getGuest($email) {
  if (empty($email)) {
    return null;
  }
  include "dbCreds.php";
  try {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

  //TODO(Marin): send back all fields here
    $sql = "SELECT * FROM guests";
    $result = $conn->query($sql);

    $emailToSearchFor = $email;

    if ($result->num_rows > 0) {

      $userToReturn = null;
      $relatedUsers = array();
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if ($emailToSearchFor == $row['email']) {
          if ($row['emailOwner'] == 'Y') {
            $userToReturn = $row;
          }
          else {
            $relatedUsers[] = $row;
          }
        }
      }
      if ($userToReturn != null) {
        $relatedUsers[] = $userToReturn;
        $userToReturn['relatedUsers'] = $relatedUsers;
      }
      return $userToReturn;

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