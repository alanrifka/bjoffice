<?php
include('../../koneksi.php');

//Hapus karyawan
    $id=$_GET['hapus-us'];
    mysql_query("Delete FROM user WHERE iduser='$id'")or die(mysql_error());
    header ("Location: daftaruser.php");

?>