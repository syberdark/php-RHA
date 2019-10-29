<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rekap Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <li><a href="index.php?page=home">Dashboard</a></li>
                            <li class="active">Hapus</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        

<?php


include "../koneksi.php";


$id = $_GET['id'];
$query = "DELETE dataa,datab,datac,datad,datae,dataf,datag,datah,datai,dataj,datak FROM
dataa LEFT JOIN datab ON dataa . id=datab . id
LEFT JOIN datac ON datab . id=datac . id
LEFT JOIN datad ON datac . id=datad . id
LEFT JOIN datae ON datad . id=datae . id
LEFT JOIN dataf ON datae . id=dataf . id
LEFT JOIN datag ON dataf . id=datag . id
LEFT JOIN datah ON datag . id=datah . id
LEFT JOIN datai ON datah . id=datai . id
LEFT JOIN dataj ON datai . id=dataj . id
LEFT JOIN datak ON dataj . id=datak . id
WHERE dataa . id='$id'";
$sql = mysqli_query($db,$query);

if($sql)
{

?>

<div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Selamat!</span> Data Berhasil Dihapus.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            
            <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Hapus Data
                        </div>
                            <div class="card-body card-block">
        
        <form action="index.php?page=data-read" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-dot-circle-o"></i> Lihat Hasil
                          
                          </button>
                          </form>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>

        <?php
        }
        else
        {
     // Jika Gagal, Lakukan :
        ?>
        <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Terjadi kesalahan saat mencoba untuk menghapus data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Hapus Data
                        </div>
                            <div class="card-body card-block">
       

        <form action="index.php?page=data-read" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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