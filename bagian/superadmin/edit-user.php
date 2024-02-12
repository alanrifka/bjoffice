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
                  <h2>Edit User</h2>
                  <div class="x_title">
                <div class="col-lg-12"><p></p>
                        <!-- /.panel-heading -->
                        
                    <!-- Auto ID -->
                    <?php
                            include('../../koneksi.php');
                            $edit=mysql_query("SELECT * FROM user WHERE iduser='$_GET[id]'");
                            $data=mysql_fetch_array($edit);
                    ?>
                    <form role="form" method="post" action="aksi.php">
                    <div class="form-group">
                        <label>ID user</label>
                        <input class="form-control" name="iduser" type="text" value="<?php echo $data ['iduser']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input class="form-control" name="nama" value="<?php echo $data ['nama']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" value="<?php echo $data ['alamat']; ?>"  type="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input class="form-control" name="umur" value="<?php echo $data ['umur']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" value="<?php echo $data ['username']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" value="<?php echo $data ['password']; ?>" type="password">
                     </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level" value="<?php echo $data ['level']; ?>">
                        <option value="#" disabled selected hidden> Pilih </option>
                        <option value="superadmin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="user">user</option>
                      </select>
                    </div>
                    <button type="submit" name="edit-user" class="btn btn-default">Simpan</button>
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
        <?php include ('../komponen/../komponen/footer.php')?>
        <!-- /footer content -->
      </div>
    </div>
<?php include ('../komponen/js.php')?>	
  </body>
</html>
