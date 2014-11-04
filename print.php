<?php
require 'vendor/medoo.php';

	if (isset($_GET['idpasien']) && is_numeric($_GET['idpasien']))
	{
		$id = $_GET['idpasien'];
		}

$database = new medoo();
$data_pasien = $database->select("pasiens", [
	"idpasien",
	"nama",
	"alamat",
	"telepon",
	"usia",
	"alergi",
	"penyakit_lain"],[
	"idpasien" => $id
	]);
	
$data_kunjungan = $database->select("kunjungans", [
	"id",
	"tanggal",
	"tipe",
	"dokter",
	"obat",
	"info_dokter",
	"khasiat_obat",
	"keterangan_resep",
	"penyimpanan_obat",
	"interaksi_obat"],[
	"idpas" => $id,
	"ORDER" => "id ASC"
	]);

foreach($data_pasien as $datapas)
echo $datapas["nama"];
echo $datapas["alamat"];
echo $datapas["telepon"];
echo $datapas["usia"];
echo $datapas["alergi"];
echo $datapas["penyakit_lain"];

echo '<br>';
echo '<hr>';

foreach($data_kunjungan as $datakunj)
{
echo $datakunj["tanggal"];
echo $datakunj["tipe"];
echo $datakunj["dokter"];
echo $datakunj["obat"];
echo $datakunj["info_dokter"];
echo $datakunj["khasiat_obat"];
echo $datakunj["penyimpanan_obat"];
echo $datakunj["keterangan_resep"];
echo $datakunj["interaksi_obat"];
}
?>