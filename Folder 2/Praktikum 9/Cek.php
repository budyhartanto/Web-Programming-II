<?php
header('Content-Type: text/xml');

$nama = $_GET['nama'];

// membuat root tag elemen
echo '<response>';

// daftar anggota keluarga
$myFamily = array('ROSIHAN', 'AMALIA', 'FAZA', 'NADA');

// jika nama berada dalam daftar anggota keluarga

if (in_array(strtoupper($nama), $myFamily))
     echo 'Hallo &lt;strong&gt;'. htmlentities($nama) . 
          '&lt;/strong&gt;, Anda adalah anggota keluarga saya';

// jika nama masih kosong
else if (trim($nama) == '')
     echo 'Hai orang asing, silakan tulis namamu';

// jika nama tidak ada dalam daftar anggota keluarga

else
     echo '&lt;strong&gt;' . htmlentities($nama) . 
          '&lt;/strong&gt;, Anda bukan anggota keluarga saya';

// menutup root tag elemen

echo '</response>';
?>
