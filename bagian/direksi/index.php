<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='direksi'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang anda tuju.');window.location=(../logout.php')</script>";
    
  }
?>
<html lang="en">
<?php include ('../komponen/header.php');?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- top navigation -->
        <?php include ('../komponen/navigasiatas.php');?>

        <?php include ('../komponen/navigasidireksi.php');?>
        <!-- /top navigation -->
        <div class="right_col" role="main">
         <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
             
   </div>
<!-- isi dasbord-->
            <div class="x_panel fixed_height_500">
                          <div class="x_content">
                            </div>

                           <center><h1  class="name">Welcome,<?php  echo $_SESSION ['nama'] ?></h1>
                            </center> 
                       <!-- page content -->
        
          
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="../../image/7309681.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3  class="name">Akses: <?php  echo $_SESSION ['nama'] ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Yogyakarta, Ina
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Office
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="" target="_blank">bankjogja.com</a>
                        </li>
                      </ul>
                    </div>
                    

                           <!-- page content -->
                                    <div class="">
                                      <div class="row" style="display: inline-block;">
                                      <div class="top_tiles">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                          <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                                            <div class="count">179</div>
                                            <h3>New Sign ups</h3>
                                            <p>Lorem ipsum psdea itgum rixt.</p>
                                          </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                          <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-comments-o"></i></div>
                                            <div class="count">179</div>
                                            <h3>New Sign ups</h3>
                                            <p>Lorem ipsum psdea itgum rixt.</p>
                                          </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                          <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                                            <div class="count">179</div>
                                            <h3>New Sign ups</h3>
                                            <p>Lorem ipsum psdea itgum rixt.</p>
                                          </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                          <div class="tile-stats">
                                            <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                            <div class="count">179</div>
                                            <h3>New Sign ups</h3>
                                            <p>Lorem ipsum psdea itgum rixt.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- footer -->
                        <center><h3>
                              Perumda BPR Bank Jogja
                            </h3></center>
                            <th></th>
                            <center><h2>
                              
                            </h2></center>
                          </div>
                        </div>
                      </div> 
                      </div>         
                      </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->
                            
        <!-- page content -->
        </div>
         <!-- isi disini -->
        <!-- /page content -->

        <!-- footer content -->
        <?php include ('../komponen/footer.php')?>
        <!-- /footer content -->
      </div>
      
    </div>
<?php include ('../komponen/js.php')?>  
  </body>
</html>
