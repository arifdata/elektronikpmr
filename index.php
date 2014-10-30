<?php
include 'template/header.html';
require 'vendor/medoo.php';
$database = new medoo();
$list_pasien = $database->select("pasiens", [
	"idpasien",
	"nama",
	"alamat",
	"telepon",
	"usia"
],[
	"ORDER" => "idpasien ASC"
]);

echo '<div class="fixed">';
echo '<nav class="top-bar" data-topbar role="navigation">';
echo '<ul class="title-area">';
echo '<li class="name">';
echo '<h1><a href="index.php">e-PMR</a></h1>';
echo '</li>';
echo '</ul>';
echo '<ul class="right">';
echo '<li><a href="#" class="label">tekan Ctrl + F untuk mencari</a></li>';	  
echo '</ul>';
echo '<ul class="left">';
echo '<li><form action="insert_new_pasien.php" method="post">';
echo '<input type="submit" class="tiny round button" value="+ Tambah Pasien" />';
echo '</form></li>';
echo '</ul>';
echo '</nav>';
echo '</div>';

echo "<table width=100%>";
echo "<thead>";
echo "<tr>";
echo "<th>Nama</th>";
echo "<th>Alamat</th>";
echo "<th>Nomor Telepon</th>";
echo "<th width='10%'></th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach($list_pasien as $data)
{
echo "<tr>";
include 'form/list_index_table.html';
echo "</tr>";
}

echo "</tbody>";
echo "</table>";

include 'template/footer.html';
?>