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
                            <li class="active">Hapus</li>
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
                            <strong>Proses</strong> Hapus User
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
if (isset($_GET['username']))
{
    include "koneksi.php";
    
    $username = $_GET['username'];

    ?>
        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Apakah</strong> Anda Yakin Ingin Menghapus Data Ini?
                        </div>
                            <div class="card-body card-block">
       

        <form action="index.php?page=user-hapus&username=<?php echo $username; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-danger btn-sm" href= >
                          <i class="fa fa-trash"></i> Hapus                          
                          </button>
                          

        <a role="button" class="btn btn-primary btn-sm" href="index.php?page=user-read">
                        <i class="fa fa-close"></i>
                           <font color="white">Batal</font> </a>
<?php
}
else
{
  $not1 = "badge-danger";
  $not2 = "Gagal!";
  $not3 = "Maaf anda sebelumnya harus mengakses halaman ini pada tabel user";
  $not4 = "index.php";
  $not6 = "Kembali";
  $not7 = "alert-danger";
  notif($not7,$not1,$not2,$not3,$not4,$not6);
   
} 
?>
 
