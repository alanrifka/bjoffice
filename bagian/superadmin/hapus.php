<?php
include('../koneksi.php');

//Hapus user
if(isset ($_GET['hapus-us'])){
    $id=$_GET['hapus-us'];
    mysql_query("Delete FROM user WHERE iduser='$iduser'")or die(mysql_error());
    header ("Location: daftaruser.php");
};
?>