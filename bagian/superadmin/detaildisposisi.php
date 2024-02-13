<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../komponen/header.php'); 
?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php 
            include('../komponen/navigasi.php'); 
            ?>

            <!-- top navigation -->
            <?php include('../komponen/navigasiatas.php'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <!-- isi disini -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="x_panel">
                            <center><h3>Disposisi</h3></center>
                            <div class="x_title">
                                <div class="col-lg-12">
                                    <p></p>
                                    <!-- /.panel-heading -->

                                    <!-- Auto ID .-->
                                    <?php
                                    include('../../koneksi.php');
                                    $query = mysql_query("Select max(iddisposisi) as maxID FROM tbdisposisi");
                                    $data = mysql_fetch_array($query);
                                    $idMax = $data['maxID'];
                                    $noUrut = (int) substr($idMax, 5);
                                    $noUrut++;
                                    $newID = "S" . sprintf("%05s", $noUrut);
                                    ?>
                                    <form class="form-horizontal form-label-left" method="post" action="aksi.php" enctype="multipart/form-data">
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Tujuan Disposisi</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control"  name="tujuandisposisi" placeholder="Masukan Tujuan Disposisi" type="text">
                                            </div>
                                        </div>
                                         <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Tanggal Disposisi</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="date" class="form-control"  name="tgldisposisi" placeholder="" type="date">
                                         </div> 
                                         <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Batas Waktu</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="date" class="form-control"  name="bataswaktu" placeholder="" type="date">
                                         </div>
                                         </div>

                                         <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Catatan</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <textarea type="text" class="form-control"  name="catatan" rows="3" placeholder="Catatan" type="text"></textarea>
                                         </div>
                                         </div>
                                         <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">ID Surat</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control"  name="idsuratmasuk" value="<?php echo $_GET['id']?>" type="text">
                                         </div>
                                         </div>
                                         <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">ID User</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control"  name="iduser" value="<?php echo $_SESSION['iduser']?>" type="text">
                                         </div>
                                         </div>
                                        <button type="submit" name="disposisi" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>


                        </div>
                    </div>
                </div>
            </div>




            <!-- /page content -->

            <!-- footer content -->
            <?php include('../komponen/footer.php') ?>
            <!-- /footer content -->
        </div>
    </div>
    <?php include('../komponen/js.php') ?>
</body>

</html>