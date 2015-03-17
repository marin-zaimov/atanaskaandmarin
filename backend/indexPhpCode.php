<?php

include_once "guest.php";
include_once "urlHelper.php";

try {

  if (!empty($_GET['email'])) {
    $userRow = getGuest($_GET['email']);
    if ($userRow != null) {
      adjustUrlToUserLanguage($userRow);
    }
    else {
      //echo '{"success": true, "message": "notFound"}';
    }
  }
}
catch (Exception $e) {
  //echo '{"success": false, "message": "fail"}';
}

?>