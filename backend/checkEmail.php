<?php

include_once "guest.php";

try {
  $row = getGuest($_GET['email']);
  if ($row != null) {
    echo '{"success": true, "message": "'.$row['rsvp'].'", "data": '.json_encode($row).'}';
    return;
    exit;
  }
  else {
    echo '{"success": true, "message": "notFound"}';
  }
}
catch (Exception $e) {
  echo '{"success": false, "message": "notFound"}';
}

?>