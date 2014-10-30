<?php
require 'vendor/medoo.php';

// confirm that the 'id' variable has been set
	if (isset($_GET['idpasien']) && is_numeric($_GET['idpasien']))
	{
		// get the 'id' variable from the URL
		$id = $_GET['idpasien'];
		}
		
$database = new medoo();
$hapus_pasien = $database->delete("pasiens", [
	"AND" => [
		"idpasien" => $id
		]
	]
);
header('Location: index.php');
?>