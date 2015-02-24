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
  $sql = 'UPDATE guests
          SET rsvp="'.$_POST['rspv'].'"
          WHERE email=\''.$_POST['email'].'\'';

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