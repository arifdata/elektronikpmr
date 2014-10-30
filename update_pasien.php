<?php
require 'vendor/medoo.php';

$database = new medoo();
$update_pasien = $database->update("pasiens", [
	"nama" => $_POST['nama'],
	"alamat" => $_POST['alamat'],
	"telepon" => $_POST['telepon'],
	"usia" => $_POST['usia'],
	"alergi" => $_POST['alergi'],
	"penyakit_lain" => $_POST['penyakit_lain']],[
	"idpasien" => $_POST['idpasien']
	]);
header('Location: index.php');
?>