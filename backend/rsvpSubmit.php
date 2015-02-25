<?php

try {
  $dbhost = '127.0.0.1';
  $dbuser = 'root';
  $dbpass = 'marin';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if(! $conn )
  {
    die('{"success": false, "message": "'.mysql_error().'"}');
  }

  $sql = 'UPDATE guests';
  $sql .= ' SET rsvp=\''.$_POST['rsvp'].'\'';

  if (!empty($_POST['bachelorPartyRsvp']))
    $sql .= ', bachelorPartyRsvp=\''.$_POST['bachelorPartyRsvp'].'\'';
  if (!empty($_POST['transport']))
    $sql .= ', transport=\''.$_POST['transport'].'\'';
  if (!empty($_POST['arrivalDay']))
    $sql .= ', arrivalDay=\''.$_POST['arrivalDay'].'\'';
  if (!empty($_POST['sleepLocation']))
    $sql .= ', sleepLocation=\''.$_POST['sleepLocation'].'\'';
  if (!empty($_POST['allergies']))
    $sql .= ', allergies=\''.$_POST['allergies'].'\'';
  if (!empty($_POST['vegetarian']))
    $sql .= ', vegetarian=\''.$_POST['vegetarian'].'\'';
  if (!empty($_POST['meetAtanaska']))
    $sql .= ', meetAtanaska=\''.$_POST['meetAtanaska'].'\'';
  if (!empty($_POST['meetMarin']))
    $sql .= ', meetMarin=\''.$_POST['meetMarin'].'\'';

  $sql .= 'WHERE email=\''.$_POST['email'].'\'';

  mysql_select_db('atanaskaandmarin');
  $retval = mysql_query( $sql, $conn );
  if(! $retval )
  {
    die('{"success": false, "message": "'.mysql_error().'"}');
  }
  mysql_close($conn);

  echo '{"success": true, "message": true}';
}
catch (Exception $e) {
  echo '{"success": false, "message": fail}'; 
}

?>