<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='superadmin'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang anda tuju.');window.location=(../logout.php')</script>";
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php include ('../komponen/header.php');?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include ('../komponen/navigasi.php');?>

        <!-- top navigation -->
        <?php include ('../komponen/navigasiatas.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

         <!-- isi disini -->
       <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <h2>Input Surat Keluar </h2>
                  <div class="x_title">
                <div class="col-lg-12"><p></p>
                        <!-- /.panel-heading -->
                        
                    <!-- Auto ID .-->
                    <?php
                    include('../../koneksi.php');
                    $query = mysql_query("Select max(idsuratkeluar) as maxID FROM tbsuratkeluar");
                    $data = mysql_fetch_array($query);
                    $idMax = $data['maxID'];
                    $noUrut = (int) substr($idMax,5);
                    $noUrut++;
                    $newID = "S".sprintf("%05s",$noUrut);
                    ?>
                                        <form role="form" method="post" enctype= multipart/form-data action="../aksi.php">
                                        <div class="form-group">    
                                            <label>No Surat Keluar</label>
                                            <input class="form-control" name="nosuratkeluar" placeholder="No Surat Keluar ../../../"type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>No Regestrasi</label>
                                            <input class="form-control" name="noreg" placeholder="Masukan No Regestrasi "type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan Surat</label>
                                            <input class="form-control" name="tujuansurat" placeholder="Masukan Tujuan Surat"  type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Ringkasan</label>
                                            <input class="form-control" name="isi" rows="3" placeholder="Masukan Ringkasan"  type="text">
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
                                            <label>Tanggal Surat</label>
                                            <input class="form-control" name="tglsurat" placeholder="Masukan Tanggal Surat" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan" type="text"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">File</label>
                                            <input type="file" name="file" placeholder="Masukan file">
                                        </div>
                                        <button type="submit" name="tbsuratkeluar" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
        <?php include ('../komponen/footer.php')?>
        <!-- /footer content -->
      </div>
    </div>
<?php include ('../komponen/js.php')?>	
  </body>
</html>
