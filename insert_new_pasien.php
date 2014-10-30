<?php
require 'vendor/medoo.php';
$database = new medoo();
$insert_pasien = $database->insert("pasiens", [
	"nama" => "000pasien baru",
	"alamat" => "alamat pasien",
	"telepon" => "telepon pasien",
]);
header('Location: index.php');
?>