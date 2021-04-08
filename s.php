<FONT FACE=VERDANA SIZE=1>

<?php
$du="dbusername.goes.here";
$dp="dbpassword.here";
$dd="motherfucking.dbname.here";

$ur=$_SERVER['REQUEST_URI'];
$su=str_replace("s.php","",$ur);
$my=new mysqli("localhost", $du , $dp , $dd);

if ($my -> connect_errno) {
  echo "Snitches gets stitches"; 
  exit();
}

$sq = "SELECT * from info where uri='$su'";
echo "$sq";

$re = $my->query($sq);


if ($re->num_rows > 0) {
  while($row = $re->fetch_assoc()) {
    echo $row["time"] . " <B>#</B> " . $row["ip"]. " <B>#</B> " . $row["agent"]. "<br>";
  }
} else {
  echo "nothin.";
}

$my -> close();
?>
</FONT>

