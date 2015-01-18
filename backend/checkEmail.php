<?php
try {
  $servername = "127.0.0.1";
  $username = "root";
  $password = "marin";
  $dbname = "atanaskaandmarin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

//TODO(Marin): send back all fields here
  $sql = "SELECT id, email, firstName, lastName, rsvp FROM guests";
  $result = $conn->query($sql);

  $emailToSearchFor = $_GET['email'];

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
          if ($emailToSearchFor == $row['email']) {
            echo '{"success": true, "message": "'.$row['rsvp'].'", "data": '.json_encode($row).'}';
            return;
            exit;
          }
      }
  } else {
      echo "0 results";
  }
  
  $conn->close();
  echo '{"success": true, "message": "notFound"}';
}
catch (Exception $e) {
  echo '{"success": false, "message": "fail"}';
}
?>