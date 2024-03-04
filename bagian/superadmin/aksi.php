<?php
include('../../koneksi.php');
error_reporting(0);
// Input user
if(isset($_POST['user'])){	
	$iduser = $_POST['iduser'];
	
	$password = md5($_POST['password']);
	$save=mysql_query("INSERT INTO user VALUES('$_POST[iduser]','$_POST[name]','$_POST[username]','$password','$_POST[level]')") or die(mysql_error());
	header ("Location:daftaruser.php");	
};

//Edit user
if(isset($_POST['edit-user'])){	
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];		
	
	$edit=mysql_query("update user set nama='$_POST[nama]', username='$_POST[username]', password='$password' , level='$_POST[level]'") or die(mysql_error());
	
	header ("Location: daftaruser.php");	
};

// Input Surat Masuk
if(isset($_POST['tblsuratmasuk'])){	
	try {
		$idsuratmasuk = $_POST['idsuratmasuk'];
		$file = $_FILES['file']['name'];

		move_uploaded_file($_FILES['file']['tmp_name'], "../berkas/$file");

		$save = mysql_query("INSERT INTO tbsuratmasuk VALUES('$_POST[idsuratmasuk]','$_POST[nosurat]','$_POST[noreg]','$_POST[asalsurat]','$_POST[isi]','$_POST[klasifikasi]','$_POST[derajat]','$_POST[tglsurat]','$_POST[tglterima]','$_POST[keterangan]','Surat Masuk','$file')") or die(mysql_error());
		header("Location: daftarsuratmasuk.php");	
	} catch (\Throwable $error) {
		echo $error;
	}
};

	// Disposisi
if (isset($_POST['disposisi'])) {
	try {
		$idsuratmasuk = $_POST['idsuratmasuk'];
		// Perintah update status surat masuk dari SUrat Masuk menjadi Disposisi
		$edit = mysql_query("update tbsuratmasuk set status_surat='Disposisi' WHERE idsuratmasuk=" . $idsuratmasuk . "") or die(mysql_error());
	
		// Insert ke tabel tbdisposisi
		mysql_query("INSERT INTO tbdisposisi VALUES(null,'$_POST[tgldisposisi]','$_POST[bataswaktu]','$_POST[catatan]','$idsuratmasuk','$_POST[iduser]')") or die(mysql_error());

		// insert ke tabel tujuan_disposisi
		$id_disposisi_after_insert = mysql_insert_id();

		$tbbagian = $_POST['tbbagian'];
		if(count($tbbagian) > 0){
			for ($i=0; $i < count($tbbagian); $i++) { 
				mysql_query("INSERT INTO tujuan_disposisi VALUES(null,'$id_disposisi_after_insert','$tbbagian[$i]')") or die(mysql_error());
			}
		}

		header("Location: disposisi.php");
	} catch (\Throwable $th) {
		echo $th;
	}
};

if (isset($_POST['tblsuratmasuk'])) {
	try {
		$idsuratmasuk = $_POST['idsuratmasuk'];
		$file = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];

		// tentukan lokasi file akan dipindahkan
		$dirUpload = "../berkas/";

		// pindahkan file
		$upload = move_uploaded_file($tmp_name, $dirUpload . $file);

		$save = mysql_query("INSERT INTO tbsuratmasuk VALUES(null,'$_POST[nosurat]','$_POST[noreg]','$_POST[asalsurat]','$_POST[isi]','$_POST[klasifikasi]','$_POST[derajat]','$_POST[tglsurat]','$_POST[tglterima]','$_POST[keterangan]','$file')") or die(mysql_error());
		header("Location: daftarsuratmasuk.php");
	} catch (\Throwable $th) {
		echo $th;
	}
};

// Input Surat Keluar
if(isset($_POST['tbsuratkeluar'])){	
	$idsuratmasuk = $_POST['idsuratkeluar'];
	$file = $_FILES['file']['name'];

	move_uploaded_file($_FILES['file']['tmp_name'],"../berkassuratkeluar/$file");

	$save=mysql_query("INSERT INTO tbsuratkeluar VALUES('$_POST[idsuratkeluar]','$_POST[nosuratkeluar]','$_POST[noreg]','$_POST[tujuansurat]','$_POST[isi]','$_POST[klasifikasi]','$_POST[tglsurat]','$_POST[keterangan]','$file')") or die(mysql_error());
	header ("Location: daftarsuratkeluar.php");	
};


// Input Bagian
if(isset($_POST['tbbagian'])){
	$idbagian = $_POST['idbagian'];	

	$save=mysql_query("INSERT INTO tbbagian VALUES('$_POST[idbagian]','$_POST[bagian]')") or die(mysql_error());
	header ("Location: daftarbagian.php");	
};
//Edit Bagian
if(isset($_POST['edit-bagian'])){	
	$bagian = $_POST['bagian'];		
	
	$edit=mysql_query("update user set tbbagian='$_POST[bagian]") or die(mysql_error());
	
	header ("Location: daftaruser.php");	
};
?>