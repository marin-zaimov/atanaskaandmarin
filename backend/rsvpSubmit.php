<?php

include "dbCreds.php";
try {

  $conn = mysql_connect($servername, $username, $password);
  if(! $conn )
  {
    die('{"success": false, "message": "'.mysql_error().'"}');
  }

  mysql_set_charset('utf8',$conn);

  $sql = 'UPDATE guests';
  $sql .= ' SET rsvp=\''. mysql_real_escape_string($_POST['rsvp']).'\'';

  if (!empty($_POST['bachelorPartyRsvp']))
    $sql .= ', bachelorPartyRsvp=\''. mysql_real_escape_string($_POST['bachelorPartyRsvp']).'\'';
  if (!empty($_POST['transport']))
    $sql .= ', transport=\''. mysql_real_escape_string($_POST['transport']).'\'';
  if (!empty($_POST['arrivalDay']))
    $sql .= ', arrivalDay=\''. mysql_real_escape_string($_POST['arrivalDay']).'\'';
  if (!empty($_POST['sleepLocation']))
    $sql .= ', sleepLocation=\''. mysql_real_escape_string($_POST['sleepLocation']).'\'';
  if (!empty($_POST['allergies']))
    $sql .= ', allergies=\''. mysql_real_escape_string($_POST['allergies']).'\'';
  if (!empty($_POST['vegetarian']))
    $sql .= ', vegetarian=\''. mysql_real_escape_string($_POST['vegetarian']).'\'';
  if (!empty($_POST['meetAtanaska']))
    $sql .= ', meetAtanaska=\''. mysql_real_escape_string($_POST['meetAtanaska']).'\'';
  if (!empty($_POST['meetMarin']))
    $sql .= ', meetMarin=\''. mysql_real_escape_string($_POST['meetMarin']).'\'';
  $nightsToStay = '';
  if (!empty($_POST['nightsToStay'])) {
    foreach ($_POST['nightsToStay'] as $night => $stayBoolean) {
      if ($stayBoolean == 'true') {
        $nightsToStay .= $night;
      }
    }
  }
  $sql .= ', nightsToStay=\''. mysql_real_escape_string($nightsToStay).'\'';
  $sql .= 'WHERE email=\''. mysql_real_escape_string($_POST['email']).'\' AND emailOwner = \'Y\'';
  
  mysql_select_db('atanaskaandmarin');
  $retval = mysql_query( $sql, $conn );
  if(! $retval )
  {
    die('{"success": false, "message": "'.mysql_error().'"}');
  }

  if (!empty($_POST['guests'])) {
    foreach ($_POST['guests'] as $id => $rsvp) {

      if ($rsvp == 'false') {
        $rsvp = 'N';
      }
      else {
        $rsvp = 'Y';
      }
      $sql = 'UPDATE guests';
      $sql .= ' SET rsvp=\''.$rsvp.'\' WHERE id=\''.$id.'\'';

      mysql_select_db('atanaskaandmarin');
      $retval = mysql_query( $sql, $conn );
      if(! $retval )
      {
        die('{"success": false, "message": "'.mysql_error().'"}');
      }
    }
  }
  mysql_close($conn);

  echo '{"success": true, "message": true}';
}
catch (Exception $e) {
  echo '{"success": false, "message": fail}'; 
}

?>