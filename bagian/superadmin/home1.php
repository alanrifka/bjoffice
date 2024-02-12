<?php 
session_start();
if(! isset($_SESSION['kdkr'])) {
    header("Location: ../../index.php");
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
         <h2>Selamat Datang</h2>

         
        <!-- /page content -->

        <!-- footer content -->
        <?php include ('../komponen/footer.php')?>
        <!-- /footer content -->
      </div>
    </div>
<?php include ('../komponen/js.php')?>  
  </body>
</html>
