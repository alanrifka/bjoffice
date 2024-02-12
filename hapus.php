<?php
include('../koneksi.php');

//Hapus karyawan
if(isset ($_GET['hapus-kr'])){
    $id=$_GET['hapus-kr'];
    mysql_query("Delete FROM karyawan WHERE kdkr='$kdkr'")or die(mysql_error());
    header ("Location: daftarkaryawan.php");
};

//Hapus Bahan Baku
if(isset($_GET['hapus-bb'])){
    $id=$_GET['hapus-bb'];
    mysql_query("Delete FROM bahanbaku WHERE kdd='$kdd'") or die(mysql_error());
    header ("Location: daftarbahanbaku.php");
};

// hapus konsumen
if(isset ($_GET['hapus-ks'])){
    $id=$_GET['hapus-ks'];
    mysql_query("Delete FROM konsumen WHERE kdks='$kdks'") or die(mysql_error());
    header ("Location: daftarkonsumen.php");
};
// hapus konsumen
if(isset ($_GET['hapus-sup'])){
    $id=$_GET['hapus-sup'];
    mysql_query("Delete FROM supplier WHERE kdsup='$kdsup'") or die(mysql_error());
    header ("Location: daftarsupplier.php");
};
?>