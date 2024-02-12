
<html lang="en">
<!-- push test -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>office Bank Jogja</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

<body class="login">
     
<?php
	if (isset($_POST['login'])){
		include("koneksi.php");
		$username = $_POST['username'];
		$password     = md5($_POST['password']);
		$query1	  = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		if(mysql_num_rows($query1) == 0){
			echo '
			<div class="animated shake">
			<div class="alert-danger">Kombinasi username dan password salah!
			</div>
			</div>';
		}else{
			$row = mysql_fetch_assoc($query1);
			if($row['level']=='superadmin'){
                $_SESSION['iduser']=$row['iduser'];
				$_SESSION['nama']=$row['nama'];
				$_SESSION['alamat']=$row['alamat'];
				$_SESSION['umur']=$row['umur'];
				$_SESSION['username']=$row['username'];
				$_SESSION['password']=$row['password'];
				$_SESSION['level']='admin';
				header("Location:bagian/superadmin/index.php");
        }else if($row['level']=='admin'){
                $_SESSION['iduser']=$row['iduser'];
                $_SESSION['nama']=$row['nama'];
                $_SESSION['alamat']=$row['alamat'];
                $_SESSION['umur']=$row['umur'];
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                $_SESSION['level']='admin';
                header("Location:bagian/admin/index.php");
        }else if($row['level']=='user'){
                $_SESSION['iduser']=$row['iduser'];
                $_SESSION['nama']=$row['nama'];
                $_SESSION['alamat']=$row['alamat'];
                $_SESSION['umur']=$row['umur'];
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                $_SESSION['level']='admin';
                header("Location:bagian/user/index.php");
		}else{
			echo'
			<div class="animated shake">
			<div class="alert-danger">
			Kombinasi Username dan Password salah!<a href="#" class="alert-link"></a>.
			</div>
			</div>';
		}
	}
}
?>

     
    <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
                   
                    <div class="panel-body">
                        <img src="image/logobj1.png" alt="">
                        <form role="form" method="post">
                            <h1 class="panel-title"> Form Login</h1>

                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" class="btn btn-lg btn-success btn-block">Login</a>
                                    
                                    
                            </fieldset>
                            <div class="clearfix"></div>
                                        <br />
                                    <div>
                                      <h1>Office Bank Jogja</h1><p>©2019</p>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
