<?php
	session_start();
	if($_SESSION['level'] == "admin"){

		header("Location: admin/");

	}
	if($_SESSION['level'] == "produksi"){

		header("Location: produksi/");

	}


?>