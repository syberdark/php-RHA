<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php?page=home">Dashboard</a></li>
                            <li><a href="index.php?page=user-read">User</a></li>
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<?php
function notif($r1,$r2,$r3,$r4,$r5,$r7){
?>
                <div class="col-sm-12">
                <div class="alert <?php echo $r1; ?> alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill <?php echo $r2; ?>"><?php echo $r3; ?></span> <?php echo $r4; ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Tambah User
                            </div>
                            <div class="card-body card-block">


                <form action="<?php echo $r5; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                           <?php echo $r7; ?>
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
            <?php

}
?>


<?php
if (isset($_POST['username']) AND isset($_POST['password']) AND isset($_POST['password_konfirmasi']) AND isset($_POST['nama']))
{
    include "koneksi.php";


    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_konfirmasi = $_POST['password_konfirmasi'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $id_role = '2';


  if(empty($username))
  {
    $not1 = "badge-warning";
    $not2 = "Warning!";
    $not3 = "Username Harus Diisi";
    $not4 = "index.php?page=user-tambah";
    $not6 = "Kembali";
    $not7 = "alert-warning";
    notif($not7,$not1,$not2,$not3,$not4,$not6); 
  } 
  else
  {
    if(empty($password))
    {
      $not1 = "badge-warning";
      $not2 = "Warning!";
      $not3 = "Password Harus Diisi";
      $not4 = "index.php?page=user-tambah";
      $not6 = "Kembali";
      $not7 = "alert-warning";
      notif($not7,$not1,$not2,$not3,$not4,$not6);
    }
    else
    {
      if(empty($password_konfirmasi))
      {
        $not1 = "badge-warning";
        $not2 = "Warning!";
        $not3 = "Konfirmasi Password Harus Diisi";
        $not4 = "index.php?page=user-tambah";
        $not6 = "Kembali";
        $not7 = "alert-warning";
        notif($not7,$not1,$not2,$not3,$not4,$not6);
      }
      else
      {
        if(empty($nama))
        {
          $not1 = "badge-warning";
          $not2 = "Warning!";
          $not3 = "Nama Lengkap Harus Diisi";
          $not4 = "index.php?page=user-tambah";
          $not6 = "Kembali";
          $not7 = "alert-warning";
          notif($not7,$not1,$not2,$not3,$not4,$not6);
        }
        else
        {
          $cekdulu = "SELECT * FROM pengguna where username='$_POST[username]'";
          $prosescek=mysqli_query($db, $cekdulu);
          if (mysqli_num_rows($prosescek) > 0)
          {
            $not1 = "badge-warning";
            $not2 = "Warning!";
            $not3 = "Username Sudah Ada yang Menggunakan";
            $not4 = "index.php?page=user-tambah";
            $not6 = "Kembali";
            $not7 = "alert-warning";
            notif($not7,$not1,$not2,$not3,$not4,$not6); 
            
          }
          else
          {
            if(strlen($password) >= 5)
            {
              if($password == $password_konfirmasi)
              {
                $password = md5($password);
                $query = "INSERT INTO pengguna (username,password,id_role,nama,alamat,no_telp,email) VALUES ('$username','$password','$id_role','$nama','$alamat','$no_telp','$email')";
                $sql = mysqli_query($db, $query);
                if($sql)
                {
                  $not1 = "badge-success";
                  $not2 = "Selamat!";
                  $not3 = "Data Berhasil Ditambahkan";
                  $not4 = "index.php?page=user-read";
                  $not6 = "Lihat Hasil";
                  $not7 = "alert-success";
                  notif($not7,$not1,$not2,$not3,$not4,$not6);
                  
                }
                else
                {
                  $not1 = "badge-danger";
                  $not2 = "Gagal!";
                  $not3 = "Terjadi kesalahan saat mencoba untuk menyimpan data ke database";
                  $not4 = "index.php?page=user-tambah";
                  $not6 = "Kembali";
                  $not7 = "alert-danger";
                  notif($not7,$not1,$not2,$not3,$not4,$not6);
                  
                }
              }
              else
              {
                  $not1 = "badge-warning";
                  $not2 = "Warning!";
                  $not3 = "Konfirmasi Passord Tidak Cocok";
                  $not4 = "index.php?page=user-tambah";
                  $not6 = "Kembali";
                  $not7 = "alert-warning";
                  notif($not7,$not1,$not2,$not3,$not4,$not6);
                
              }
            }
            else
            {
                  $not1 = "badge-warning";
                  $not2 = "Warning!";
                  $not3 = "Minimal Password Baru adalah 5 Karakter";
                  $not4 = "index.php?page=user-tambah";
                  $not6 = "Kembali";
                  $not7 = "alert-warning";
                  notif($not7,$not1,$not2,$not3,$not4,$not6);
              
            }
          }
        }
      }
    }
  }



}
else
{
  $not1 = "badge-danger";
  $not2 = "Gagal!";
  $not3 = "Maaf anda sebelumnya harus mengakses halaman ini pada form tambah user";
  $not4 = "index.php";
  $not6 = "Kembali";
  $not7 = "alert-danger";
  notif($not7,$not1,$not2,$not3,$not4,$not6);
}
