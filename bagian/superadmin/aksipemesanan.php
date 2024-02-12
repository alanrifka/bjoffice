<?php
include('../../koneksi.php');
// Input Pemesanan
if(isset($_POST['inputpemesanan'])){	
	$kdpms = $_POST['kdpms'];

	//kode otomatis untuk tabel produksi
	$query = mysql_query("Select max(kdpro) as maxID FROM produksi");
    $data = mysql_fetch_array($query);
	$idMax = $data['maxID'];
	$noUrut = (int) substr($idMax,5);
	$noUrut++;
	$kdpro = "KPS".sprintf("%05s",$noUrut);

	echo "$kdpro";

	$save=mysql_query("INSERT INTO pemesanan VALUES('$_POST[kdpms]','$_POST[kdks]','$_POST[kdkr]','$_POST[tglpms]','$_POST[tgljadi]','DalamAntrian')") or die(mysql_error());
	
	header ("Location: inputpemesanan.php");
};
// Input Detail Pemesanan
if(isset($_POST['inputdpemesanan'])){	
	$kddpms = $_POST['kddpms'];

	$save=mysql_query("INSERT INTO dpemesanan VALUES('$_POST[kddpms]','$_POST[kdpms]','$_POST[kdran]','$_POST[jml]','$_POST[harga]')");
	header ("Location: inputpemesanan.php");
};
?>