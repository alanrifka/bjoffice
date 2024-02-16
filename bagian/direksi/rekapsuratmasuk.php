<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='direksi'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang anda tuju.');window.location=(../logout.php')</script>";
    
  }
?>
<!DOCTYPE html>
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
              <h2>Rekap Surat Masuk</h2>
              <ul class="nav navbar-right panel_toolbox">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="col-md-3 col-sm-9 col-xs-12">      
            <label class="control-label">Mulai Tanggal</label>      
            <input type="text" name="start_date" id="start_date" class="form-control tanggal" autocomplete="off"/>
          </div>
          <div class="col-md-3 col-sm-9 col-xs-12">
            <label class="control-label">Sampai Tanggal</label>      
            <input type="text" name="end_date" id="end_date" class="form-control tanggal" autocomplete="off"/>
          </div>              
          <div class="col-md-3 col-sm-9 col-xs-12">
            <label class="control-label"></label>      
            <input type="submit" name="search" id="search" value="Search" class="form-control btn btn-info" />
          </div>
          </div>
        </div>
          <!-- /js content -->
        <?php include ('../komponen/js.php')?>  
      </body>
      </html>
