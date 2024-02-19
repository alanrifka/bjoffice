<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='superadmin'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang anda tuju.');window.location=(../logout.php')</script>";
    
  }
?><!DOCTYPE html>

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
                  <div class="x_title">
                    <h2>Daftar User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">  
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                      </thead>
                      <tbody>
                        <?php
          include "../../koneksi.php";
          $sql = mysql_query("SELECT * FROM user ORDER by iduser DESC");
          $no = 1;
          while ($data = mysql_fetch_array($sql)){
        ?>
                        <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['username'] ?></td>
                                    <td><?php echo $data['level'] ?></td>
                                    <td><div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class=""></i> Action
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="edit-user.php?id=<?php echo $data['iduser']?>"><i class=" fa fa-edit"></i> Edit</a>
                                        </li>
                                        <li><a href="hapus-user.php?&hapus-us=<?php echo $data['iduser'] ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')"><i class=" fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                    </ul>
                      </tbody>
                      <?php $no++; } ?>
                    </table>
                  </div>
                </div>
              </div>
         </div>
        <?php include ('../komponen/footer.php')?>
      </div>
    </div>
<?php include ('../komponen/js.php')?>	
  </body>
</html>
