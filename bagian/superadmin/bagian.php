
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
                    $query = mysql_query("Select max(idbagian) as maxID FROM tbbagian");
                    $data = mysql_fetch_array($query);
                    $idMax = $data['maxID'];
                    $noUrut = (int) substr($idMax,4);
                    $noUrut++;
                    $newID = "B".sprintf("%05s",$noUrut);
                    ?>
                                        <form role="form" method="post" action="aksi.php">
                                        <div class="form-group">
                                            <label>ID Bagian</label>
                                            <input class="form-control" name="idbagian" type="text" value="<?php echo $newID ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Bagian</label>
                                            <input class="form-control" name="bagian" placeholder="Masukan Nama"type="text">
                                        </div>
                                        <button type="submit" name="tbbagian" class="btn btn-default">Simpan</button>
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
