<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='direksi'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang anda tuju.');window.location=(../logout.php')</script>";
    
  }
?><!DOCTYPE html>
<html lang="en">
<?php include ('../komponen/header.php');?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include ('../komponen/navigasidireksi.php');?>

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
                    <h2>Disposisi</h2>
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
                                    <th>No Surat</th>
                                    <th>No Regrestrasi</th>
                                    <th>Asal Surat</th>
                                    <th>Isi</th>
                                    <th>Klasifikasi</th>
                                    <th>derajat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Tanggal Diterima</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                    <th>Disposisi</th>
                                    <th>Action</th>
                                </tr>
                      </thead>


                      <tbody>
                        <?php
          include "../../koneksi.php";
          $sql = mysql_query("SELECT * FROM tbsuratmasuk ORDER by idsuratmasuk DESC");
          $no = 1;
          while ($data = mysql_fetch_array($sql)){
        ?>
                        <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nosurat'] ?></td>
                                    <td><?php echo $data['noreg'] ?></td>
                                    <td><?php echo $data['asalsurat'] ?></td>
                                    <td><?php echo $data['isi'] ?></td>
                                    <td><?php echo $data['klasifikasi'] ?></td>
                                    <td><?php echo $data['derajat'] ?></td>
                                    <td><?php echo $data['tglsurat'] ?></td>
                                    <td><?php echo $data['tglterima'] ?></td>
                                    <td><?php echo $data['keterangan'] ?></td>
                                    <td><?php echo $data['file'] ?></td>
                                    <td><div >
                                    <button  type="button" class="btn btn-warning"><a href="detaildisposisi.php?id=<?php echo $data['idsuratmasuk']?>"></i> Disposisi </button>
                                    <td><div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Action
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="../berkas/<?php echo $data['file']?>"><i class=" fa fa-download"> </i> Download</a>
                                        </li>
                                        <li><a href="edit-.php?id=<?php echo $data['iduser']?>"><i class=" fa fa-edit"></i> Edit</a>
                                        </li>
                                        <li><a href="hapus-.php?&hapus-kr=<?php echo $data['user'] ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')"><i class=" fa fa-trash-o"></i> Hapus</a>
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
        <!-- /footer content -->
      </div>
    </div>
<?php include ('../komponen/js.php')?>	
  </body>
</html>
