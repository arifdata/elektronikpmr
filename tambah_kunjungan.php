<?php
// confirm that the 'id' variable has been set
	if (isset($_GET['idpasien']) && is_numeric($_GET['idpasien']))
	{
		// get the 'id' variable from the URL
		$id = $_GET['idpasien'];
		}
		
include 'form/form_tambah_kunjungan.html';
?>