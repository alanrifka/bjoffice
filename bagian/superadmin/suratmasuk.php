<!DOCTYPE html>
<html lang="en">
<?php include('../komponen/header.php'); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include('../komponen/navigasi.php'); ?>

            <!-- top navigation -->
            <?php include('../komponen/navigasiatas.php'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

         <!-- isi disini -->
       <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <h2>Input Surat Masuk </h2>
                  <div class="x_title">
                <div class="col-lg-12"><p></p>
                        <!-- /.panel-heading -->
                        
                    <!-- Auto ID .-->
                    <?php
                    include('../../koneksi.php');
                    $query = mysql_query("Select max(idsuratmasuk) as maxID FROM tbsuratmasuk");
                    $data = mysql_fetch_array($query);
                    $idMax = $data['maxID'];
                    $noUrut = (int) substr($idMax,5);
                    $noUrut++;
                    $newID = "S".sprintf("%05s",$noUrut);
                    ?>
                                        <form role="form" method="post" action="aksi.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>No Surat</label>
                                            <input class="form-control" name="nosurat" placeholder="No Surat .../.../../" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>No Regestrasi</label>
                                            <input class="form-control" name="noreg" placeholder="Masukan No Regestrasi " type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Surat</label>
                                            <input class="form-control" name="asalsurat" placeholder="Masukan Asal Surat" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Ringkasan</label>
                                            <textarea class="form-control" name="isi" rows="3" placeholder="Isi Ringkasan" type="text"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select class="form-control" name="klasifikasi">
                                                <option value="#" disabled selected hidden> Pilih </option>
                                                <option value="Sangat Rahasia">Sangat Rhasia</option>
                                                <option value="Rahasia">Rahasia</option>
                                                <option value="Biasa">Biasa</option>
                                                <option value="Pemberitahuan">Pemberitahuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Derajat</label>
                                            <select class="form-control" name="derajat">
                                                <option value="#" disabled selected hidden> Pilih </option>
                                                <option value="segera">Segera</option>
                                                <option value="biasa">Biasa</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Surat</label>
                                            <input class="form-control" name="tglsurat" placeholder="Masukan Tanggal Surat" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Diterima</label>
                                            <input class="form-control" name="tglterima" placeholder="Masukan Tanggal Terima" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan" type="text"></textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label class="control-label">File</label>
                                            <input type="file" name="file" placeholder="Masukan file">
                                        </div>
                                        <button type="submit" name="tblsuratmasuk" class="btn btn-default">Simpan</button>
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