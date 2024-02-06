<!DOCTYPE html>
<html lang="en">
<?php include('../komponen/header.php'); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include('../komponen/navigasi.php'); ?>

            <!-- top navigation -->
            <?php include('../komponen/navigasiatas.php'); ?>
            <!-- /top navigation -->

            <!-- page content -->
                     <?php
                        include "../../koneksi.php";
                        if (isset($_GET['idsuratmasuk'])) 
                        $idsuratmasuk1 = $_GET['idsuratmasuk'];
                        $query = mysql_query( "SELECT*FROM tbsuratmasuk WHERE idsuratmasuk = '$idsuratmasuk' ");
                        $data = mysql_fetch_array($query);
                                                
                                                
                    ?>
                                <!-- footer content -->
            <?php include('../komponen/footer.php') ?>
            <!-- /footer content -->
        </div>
    </div>
    <?php include('../komponen/js.php') ?>
</body>

</html>