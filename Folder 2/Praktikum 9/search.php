<?php
header('Content-Type: text/xml');

echo '<hasil>';

$namaMhs = $_GET['namaMhs'];

mysql_connect("namahost","dbuser","dbpass");
mysql_select_db("dbname");

$query = "SELECT * FROM mhs WHERE namamhs LIKE '%$namaMhs%'";
$hasil = mysql_query($query);

while ($data = mysql_fetch_array($hasil))
{
   echo "<mhs>";
   echo "<nim>".$data['NIM']."</nim>";
   echo "<namamhs>".$data['NAMAMHS']."</namamhs>";
   echo "<alamat>".$data['ALAMAT']."</alamat>";
   echo "</mhs>";
}

echo '</hasil>';
?>
