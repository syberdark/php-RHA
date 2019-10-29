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
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


<?php
if (isset($_POST['username']))
{
include "koneksi.php";

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $id_role = '3';
    if(empty($nama))
    {
        ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Nama Lengkap Harus Diisi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Edit User
                            </div>
                            <div class="card-body card-block">


                <form action="index.php?page=user-edit&username=<?php echo $username; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
            <?php
    }
    else
    {
        $query = "SELECT * FROM pengguna WHERE username= '$username'";

    $cek = mysqli_query($db,$query);

    $num = mysqli_num_rows($cek);

    if($num > 0)
        {
            $query = "UPDATE pengguna SET
            nama='$nama',
            id_role = '$id_role'
            WHERE username='$username'"; 
        }
        else
            {
                $query = "INSERT INTO pengguna (username,nama,id_role) VALUES ('$username','$nama','$id_role')";
            }
    
    $update = mysqli_query($db,$query);
    if($update)
        {
            ?>
            <div class="col-sm-12">
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                      <span class="badge badge-pill badge-success">Selamat!</span> Data User berhasil diedit.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>


                <div class="col-lg-12">
                <div class="card">
                 <div class="card-header">
                    <strong>Proses</strong> Edit User
                    </div>
        <div class="card-body card-block">


                    <form action="index.php?page=user-read" method="post" enctype="multipart/form-data" class="form-horizontal">    
                       
                            <button type="submit" class="btn btn-primary btn-sm" href= >
                              <i class="fa fa-dot-circle-o"></i> Lihat Hasil
                              </button>
                              </form>

    </div>
    </div>
    </div> 
        <?php
        }
        else
            {
                 ?>
                        <div class="col-sm-12">
                        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                          <span class="badge badge-pill badge-danger">Gagal!</span> Gagal merubah Data User.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Proses</strong> Edit User
                                    </div>
                                    <div class="card-body card-block">


                        <form action="index.php?page=user-edit&username=<?php echo $username; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                           
                                <button type="submit" class="btn btn-primary btn-sm" href= >
                                  <i class="fa fa-arrow-left"></i> Kembali
                                  </button>
                                  </form>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                        
                        <?php
            }
    }

}
else
{
    ?>
        <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form Edit User.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Edit User
                        </div>
                            <div class="card-body card-block">
       

        <form action="index.php" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-arrow-left"></i> Kembali
                          
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
        <?php
}
?>

        
