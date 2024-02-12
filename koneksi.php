<?php

$server ="localhost";
$user ="root";
$passwd ="";
$db ="bjoffice";
require_once "parser-php-version.php";
$koneksi=mysql_connect($server,$user,$passwd) or die ("Gagal Konek ke server MySQL".mysql_error());
$bukadb=mysql_select_db($db) or die ("Gagal Membuka database $db".mysql_error());

//Rupiah
function rupiah($nominal)
{
	$rupiah = number_format($nominal, 0, ",", ".");
	$rupiah = "Rp. " . $rupiah . ",00";
	return $rupiah;
}
?>