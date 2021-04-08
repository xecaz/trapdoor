<?php
$du="dbusername.goes.here";
$dp="dbpassword.here";
$dd="motherfucking.dbname.here";

$ip = $_SERVER['REMOTE_ADDR'];
$ti = date("Y-m-d H:i:s");
$ag = $_SERVER['HTTP_USER_AGENT'];
$ur = $_SERVER['REQUEST_URI'];
$my = new mysqli("localhost", $du , $dp , $dd);

if ($my -> connect_errno) {
  echo "Snitches gets stitches"; 
  exit();
}

$sq = "INSERT INTO info (ip,time, agent, uri)
VALUES ('$ip', '$ti', '$ag', '$ur')";

if ($my->query($sq) === TRUE) {
  echo "";
} 

echo 'Error 503. The service is unavailable. Please try again later';

$mysqli -> close();
?>



