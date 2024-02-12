<?php
include('../../koneksi.php');
error_reporting(0);
// Input user
if(isset($_POST['user'])){	
	$iduser = $_POST['iduser'];
	
	$password = md5($_POST['password']);
	$save=mysql_query("INSERT INTO user VALUES('$_POST[iduser]','$_POST[nama]','$_POST[alamat]','$_POST[umur]','$_POST[username]','$password','$_POST[level]')") or die(mysql_error());
	header ("Location:daftaruser.php");	
};

//Edit user
if(isset($_POST['edit-user'])){	
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];		
	
	$edit=mysql_query("update user set nama='$_POST[nama]', alamat='$_POST[alamat]', umur='$_POST[umur]', username='$_POST[username]', password='$password' , level='$_POST[level]'") or die(mysql_error());
	
	header ("Location: daftaruser.php");	
};

// Input Surat Masuk
<<<<<<< HEAD
if(isset($_POST['tblsuratmasuk'])){	
	try {
		$idsuratmasuk = $_POST['idsuratmasuk'];
		$file = $_FILES['file']['name'];

		move_uploaded_file($_FILES['file']['tmp_name'], "../berkas/$file");

		$save = mysql_query("INSERT INTO tbsuratmasuk VALUES('$_POST[idsuratmasuk]','$_POST[nosurat]','$_POST[noreg]','$_POST[asalsurat]','$_POST[isi]','$_POST[klasifikasi]','$_POST[derajat]','$_POST[tglsurat]','$_POST[tglterima]','$_POST[keterangan],'Surat Masuk','$file')") or die(mysql_error());
		header("Location: daftarsuratmasuk.php");	
	} catch (\Throwable $error) {
		echo $error;
	}
};

// Disposisi
if(isset($_POST['disposisi'])){	
	try {
		$idsuratmasuk = $_POST['idsuratmasuk'];
		$edit=mysql_query("update tbsuratmasuk set status='Disposisi' WHERE idsuratmasuk=".$idsuratmasuk."") or die(mysql_error());
		
		header("Location: disposisi.php");	
	} catch (\Throwable $error) {
		echo $error;
	}
};

=======
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
}
;
>>>>>>> 912799b (fixed surat masuk upload file)
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