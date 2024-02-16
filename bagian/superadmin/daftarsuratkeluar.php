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
                  <div class="x_title">
                    <h2>Daftar Surat Keluar</h2>
                    
                  <input type="text" class="form-control" placeholder="Search for...">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>No Regrestrasi</th>
                                    <th>Tujuan Surat</th>
                                    <th>Ringkasan</th>
                                    <th>Klasifikasi</th>
                                    <th>Tanggal Surat</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                      </thead>


                      <tbody>
                        <?php
          include "../../koneksi.php";
          $sql = mysql_query("SELECT * FROM tbsuratkeluar ORDER by idsuratkeluar DESC");
          $no = 1;
          while ($data = mysql_fetch_array($sql)){
        ?>
                        <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nosuratkeluar'] ?></td>
                                    <td><?php echo $data['noreg'] ?></td>
                                    <td><?php echo $data['tujuansurat'] ?></td>
                                    <td><?php echo $data['isi'] ?></td>
                                    <td><?php echo $data['klasifikasi'] ?></td>
                                    <td><?php echo $data['tglsuratkeluar'] ?></td>
                                    <td><?php echo $data['keterangan'] ?></td>
                                    <td><?php echo $data['file'] ?></td>
                                    <td><div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class=""></i> Action
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="../berkas/<?php echo $data['file']?>"><i class=" fa fa-download"> </i> Download</a>
                                        </li>
                                        <li><a href="edit-.php?id=<?php echo $data['iduser']?>"><i class=" fa fa-edit"></i> Edit</a>
                                        </li>
                                        <li><a href="hapus-user.php?&hapus-kr=<?php echo $data['user'] ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')"><i class=" fa fa-trash-o"></i> Hapus</a>
                                        </li>
                                    </ul>
                      </tbody>
                      <?php $no++; } ?>
                    </table>
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
