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
              <h2>Rekap Surat Keluar</h2>
              <ul class="nav navbar-right panel_toolbox">
                <div class="input-group">
                </div>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="col-md-3 col-sm-9 col-xs-12">      
            <label class="control-label">Mulai Tanggal</label>      
            <input type="date" name="start_date" id="start_date" class="form-control tanggal" autocomplete="off"/>
          </div>
          <div class="col-md-3 col-sm-9 col-xs-12">
            <label class="control-label">Sampai Tanggal</label>      
            <input type="date" name="end_date" id="end_date" class="form-control tanggal" autocomplete="off"/>
          </div>              
          <div class="col-md-3 col-sm-9 col-xs-12">
            <label class="control-label"></label>      
            <input type="submit" name="search" id="search" value="Search" class="form-control btn btn-info" />
          </div>
          </div>
          <?php 
if (isset($_POST['search'])){
  $tglmulai=$_POST['start_date'];
  $tglakhir=$_POST['end_date'];
  

    $query = "SELECT * FROM tbsuratkeluar ORDER by idsuratkeluar DESC";
    $cek = mysqli_query($conn,$query); 
}
?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">            
     <div class="x_title">
      <h4><i class="fa fa-desktop"></i> <?php echo $tglmulai; ?> | <?php echo $tglakhir; ?></h4>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datahistory" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>                                                                           
              <th class="text-center">No Surat</th> 
              <th class="text-center">No Regrestrasi</th>                     
              <th class="text-center">Tujuan Surat</th>   
              <th class="text-center">Klasifikasi</th> 
              <th class="text-center">Tanggal Surat</th>                       
          </tr>          
        </thead>
        <?php  
  
                              
            $id = 1; // Untuk penomoran tabel          
            while($data = mysqli_fetch_array($cek))
            { // Ambil semua data          
              ?>            
              <tr>              
                <td class="align-middle text-center"><?php echo $data['nosuratkeluar']; ?></td>          
                <td class="align-middle text-left"><?php echo $data['noreg']; ?></td>
                <td class="align-middle text-left"><?php echo $data['tujuansurat']; ?></td> 
                <td class="align-middle text-center"><?php echo $data['tglsuratkeluar']; ?></td>      
                <td class="align-middle text-left"><?php echo $data['tgl_input']; ?></td>          
                
                <td class="align-middle text-center"><?php echo $data['status']; ?></td>
             </tr>  
            <?php            
                
          }          
          ?>    

            <!-- /js content -->
          </div>
        </div>
        <?php include ('../komponen/js.php')?>  
      </body>
      </html>
    