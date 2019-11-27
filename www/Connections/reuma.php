
<?php

$hostname = "reuma.db.8210913.4f5.hostedresource.net";
$username = "reuma";
$dbname = "reuma";

$password = "tiz%F6bTUikbWQ";
$usertable = "reuma";

mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);

$query = "SELECT * FROM $usertable";
$result = mysql_query($query);

if ($result) {
    while($row = mysql_fetch_array($result)) {
        $name = $row["$yourfield"];
        echo "Name $name<br>";
    }
}
?>