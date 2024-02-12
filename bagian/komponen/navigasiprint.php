<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="../image/gambar7.jpg"><span>CV.</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="images/user.png" alt="..." class="img-circle profile_img">
                                </li>
                                <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
              <div class="profile_info">
                <span>Admin,<?php  echo $_SESSION ['nmkr'] ?> </span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home <span ></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Input Data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="karyawan.php">Input Karyawan</a></li>
                      <li><a href="konsumen.php">Input Konsumen</a></li>
                      <li><a href="bahanbaku.php">Input Bahan Baku</a></li>
                      <li><a href="supplier.php">Input supplier</a></li>
                      <li><a href="rancangan.php">Input rancangan</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="daftarkaryawan.php">Tabel Karyawan</a></li>
                      <li><a href="daftarkonsumen.php">Tabel Konsumen</a></li>
                      <li><a href="daftarbahanbaku.php">Tabel Bahan Baku</a></li>
                      <li><a href="daftarsupplier.php">Tabel Supplier</a></li>
                      <li><a href="daftarrancangan.php">Tabel Rancangan</a></li>
                      <li><a href="daftarpemesanan.php">Tabel Pemesanan</a></li>
                      
                    </ul>
                  </li>
                   <li><a><i class="fa fa-bar-chart-o"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inputpemesanan.php">Input Pemesanan</a></li>
                      <li><a href="inputproduksi.php">Input Produksi</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-print"></i>Print<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="printkaryawan.php">Print Karyawan</a></li>
                      <li><a href="printkonsumen.php">Print Konsumen</a></li>
                      <li><a href="printbahanbaku.php">Print Bahan Baku</a></li>
                      <li><a href="printsupplier.php">Print supplier</a></li>
                      <li><a href="printrancangan.php">Print rancangan</a></li>
                      <li><a href="printpemesanan.php">Print Pemesanan</a></li>
                    </ul>
              </div>
              <div class="menu_section">
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>