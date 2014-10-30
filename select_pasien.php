<?php
include 'template/header.html';
require 'vendor/medoo.php';

// confirm that the 'id' variable has been set
	if (isset($_GET['idpasien']) && is_numeric($_GET['idpasien']))
	{
		// get the 'id' variable from the URL
		$id = $_GET['idpasien'];
		}
			
echo '<div class="fixed">';
echo '<nav class="top-bar" data-topbar role="navigation">';
echo '<ul class="title-area">';
echo '<li class="name">';
echo '<h1><a href="index.php">e-PMR</a></h1>';
echo '</li>';
echo '</ul>';
echo '</nav>';
echo '</div>';

$database = new medoo();
$lihat_pasien = $database->select("pasiens", [
	"idpasien",
	"nama",
	"alamat",
	"telepon",
	"usia",
	"alergi",
	"penyakit_lain"],[
	"idpasien" => $id
	]);
	
$lihat_kunjungan = $database->select("kunjungans", [
	"id",
	"tanggal"],[
	"idpas" => $id,
	"ORDER" => "id ASC"
	]);

echo '<div class="row">';
echo '<div class="small-4 columns">';

foreach($lihat_pasien as $data)

include 'form/edit_pasien.html';

echo '</div>';

echo '<div class="small-8 columns">';
include 'form/menu_riwayat_kunjungan.html';
echo '<hr>';
echo '<ul class="square">';
foreach($lihat_kunjungan as $kunjung)
include 'form/list_kunjungan.html';
echo '<ul>';
echo '</div>';
echo '</div>';

include 'template/footer.html';

?>