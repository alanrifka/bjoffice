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
              <h2>Rekap Surat Keluar</h2>
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

            <div class="x_content">
              <h2><a href="printrekapproduksi.php" target="_blank"><i class="fa fa-print"><i>Cetak</i></i></a></h2>
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No Surat</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    
                    
                    
                  </tr>
                </thead>


                <tbody>
                  <?php
                  include "../../koneksi.php";
                  $sql = mysql_query("SELECT *, YEAR(tglpro) as tahun, sum(produksi.jml) as jmlpro FROM konsumen INNER JOIN pemesanan ON konsumen.kdks=pemesanan.kdks INNER JOIN dpemesanan on dpemesanan.kdpms=pemesanan.kdpms INNER JOIN produksi on produksi.kdpms=pemesanan.kdpms INNER JOIN rancangan on rancangan.kdran=dpemesanan.kdran GROUP BY YEAR(tglpro), rancangan.kdran ORDER by produksi.tglpro DESC ");
                  $no = 1;
                  while ($data = mysql_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data['tahun'] ?></td>
                      <td><?php echo $data['nmran'] ?></td>
                      <td><?php echo $data['jmlpro'] ?></td>
                      
                      
                    </tbody>
                    <?php $no++; } ?>

                    <tbody>
                      <?php
                      $sql = mysql_query("SELECT *, YEAR(tglpro) as tahun, sum(produksi.jml) as jmlpro FROM konsumen INNER JOIN pemesanan ON konsumen.kdks=pemesanan.kdks INNER JOIN dpemesanan on dpemesanan.kdpms=pemesanan.kdpms INNER JOIN produksi on produksi.kdpms=pemesanan.kdpms INNER JOIN rancangan on rancangan.kdran=dpemesanan.kdran ORDER by produksi.tglpro DESC ");
                      $no = 1;
                      $data = mysql_fetch_array($sql);
                      ?>
                      <tr>
                       
                        <td colspan="3">Total</td>
                        
                        <td><?php echo $data['jmlpro'] ?></td>
                        
                        
                      </tbody>
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
