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
                  <h2>Input User </h2>
                  <div class="x_title">
                <div class="col-lg-12"><p></p>
                        <!-- /.panel-heading -->
                        
                    <!-- Auto ID .-->
                    <?php
                    include('../../koneksi.php');
                    $query = mysql_query("Select max(iduser) as maxID FROM user");
                    $data = mysql_fetch_array($query);
                    $idMax = $data['maxID'];
                    $noUrut = (int) substr($idMax,5);
                    $noUrut++;
                    $newID = "K".sprintf("%05s",$noUrut);
                    ?>
                                        <form role="form" method="post" action="../aksi.php">
                                        <div class="form-group">
                                            <label>ID User</label>
                                            <input class="form-control" name="iduser" type="text" value="<?php echo $newID ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama User</label>
                                            <input class="form-control" name="nama" placeholder="Masukan Nama"type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" placeholder="Masukan username"  type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" placeholder="Masukan Password"  type="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                            <option value="#" disabled selected hidden> Pilih </option>
                                            <option value="superadmin">Super Admin </option>
                                            <option value="user">User</option>
                                            <option value="direksi">Direksi</option>
                                            </select>
                                        </div>
                                        <button type="submit" name="user" class="btn btn-default">Simpan</button>
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
        <?php include ('../komponen/footer.php')?>
        <!-- /footer content -->
      </div>
    </div>
<?php include ('../komponen/js.php')?>	
  </body>
</html>
