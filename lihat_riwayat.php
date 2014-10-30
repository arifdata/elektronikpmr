<?php
include 'template/header.html';
require 'vendor/medoo.php';

// confirm that the 'id' variable has been set
	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		// get the 'id' variable from the URL
		$id = $_GET['id'];
		}
		
$database = new medoo();
$data_kunjungan = $database->select("kunjungans", [
	"tanggal",
	"dokter",
	"tipe",
	"khasiat_obat",
	"penyimpanan_obat",
	"interaksi_obat",
	"info_dokter",
	"keterangan_resep",
	"obat"],[
	"id" => $id
	]);
	
foreach($data_kunjungan as $data)
include 'form/form_riwayat_kunjungan.html';

include 'template/footer.html';
?>