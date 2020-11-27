<?php

mysql_connect("namahost","dbuser","dbpass");
mysql_select_db("dbname");

header('Content-Type: text/xml');

$prop = $_GET['prop'];

$query = "SELECT kabupaten FROM prop_kab WHERE propinsi = '$prop'";
$hasil = mysql_query($query);

echo '<output>';

while ($data = mysql_fetch_array($hasil))
{
	echo "<kab>".$data['kabupaten']."</kab>";
}

echo '</output>';
?>
