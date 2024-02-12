<?php
  if (isset($_POST['login'])){
    include("koneksi.php");
    $username = $_POST['username'];
    $password     = $_POST['password'];
    $query1   = mysql_query("SELECT * FROM karyawan WHERE username='$username' AND password='$password'");
    if(mysql_num_rows($query1) == 0){
      echo '
      <div class="animated shake">
      <div class="alert-danger">Kombinasi username dan password salah!
      </div>
      </div>';
    }else{
      $row = mysql_fetch_assoc($query1);
      if($row['level']=='admin'){
        $_SESSION['kdkr']=$username;
        $_SESSION['nmkr']=$row['nmkr'];
        $_SESSION['almt']=$row['almt'];
        $_SESSION['tlp']=$row['tlp'];
                $_SESSION['jk']=$row['jk'];
                $_SESSION['email']=$row['email'];
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
        $_SESSION['level']='admin';
        header("Location:bagian/admin/index.php");
    }else if($row['level']=='stokbarang'){
          $_SESSION['kdkr']=$username;
                $_SESSION['nmkr']=$row['nmkr'];
                $_SESSION['almt']=$row['almt'];
                $_SESSION['tlp']=$row['tlp'];
                $_SESSION['jk']=$row['jk'];
                $_SESSION['email']=$row['email'];
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
        $_SESSION['level']='cs';
        header("Location:bagian/stokbarang/inputbarang.php");
    }else if($row['level']=='pimpinan'){
          $_SESSION['kdkr']=$username;
                $_SESSION['nmkr']=$row['nmkr'];
                $_SESSION['almt']=$row['almt'];
                $_SESSION['tlp']=$row['tlp'];
                $_SESSION['jk']=$row['jk'];
                $_SESSION['email']=$row['email'];
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
        $_SESSION['level']='pimpinan';
        header("Location:bagian/pimpinan/index.php");
        }else if($row['level']=='produksi'){
                $_SESSION['kdkr']=$username;
                $_SESSION['nmkr']=$row['nmkr'];
                $_SESSION['almt']=$row['almt'];
                $_SESSION['tlp']=$row['tlp'];
                $_SESSION['jk']=$row['jk'];
                $_SESSION['email']=$row['email'];
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                $_SESSION['level']='produksi';
                header("Location:bagian/produksi/index.php");
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