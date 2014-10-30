<?php
require 'vendor/medoo.php';

$database = new medoo();
$submit_kunjungan = $database->insert("kunjungans", [
	"tanggal" => $_POST['tanggal'],
	"tipe" => $_POST['tipe'],
	"dokter" => $_POST['dokter'],
	"obat" => $_POST['obat'],
	"keterangan_resep" => $_POST['ket_resep'],
	"info_dokter" => $_POST['info_dokter'],
	"khasiat_obat" => $_POST['khasiat_obat'],
	"penyimpanan_obat" => $_POST['penyimpanan_obat'],
	"interaksi_obat" => $_POST['interaksi_obat'],
	"idpas" => $_POST['idpas']
	]);
header('Location: index.php');
?>