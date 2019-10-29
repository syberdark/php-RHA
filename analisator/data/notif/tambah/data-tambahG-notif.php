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
                            <li><a href="index.php?page=data-read">Rekap Data</a></li>
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<?php
if (isset($_GET['id']) AND isset($_POST['klb']))
{
    include "../koneksi.php";


    $id = $_GET['id'];
    $klb = $_POST['klb'];
    $user = $_SESSION['nama'];


  if(empty($klb))
  {
    ?>
                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Kemungkinan KLB Harus Diisi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Tambah Data
                            </div>
                            <div class="card-body card-block">


                <form action="index.php?page=data-tambahG&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
          
                $query = "INSERT INTO datag (id,klb,user) VALUES ('$id','$klb','$user')";
                $sql = mysqli_query($db, $query);
                if($sql)
                {
                  ?>    
                  <div class="col-sm-12">
                      <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">Selamat!</span> Data berhasil ditambahkan.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
            
                    <div class="content mt-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                <strong>Proses</strong> Tambah Data
                                </div>
                                    <div class="card-body card-block">
                
                <form action="index.php?page=data-tambahH&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                                    
                                
                                <button type="submit" class="btn btn-primary btn-sm" href= >
                                  <i class="fa fa-forward"></i> Selanjutnya
                                  
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
                  ?>
                  <div class="col-sm-12">
                          <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-danger">Gagal!</span> Terjadi kesalahan saat mencoba untuk menyimpan data ke database.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>

                      <div class="content mt-3">
                              <div class="col-lg-12">
                                  <div class="card">
                                      <div class="card-header">
                                      <strong>Proses</strong> Tambah Data
                                      </div>
                                          <div class="card-body card-block">
       

                      <form action="index.php?page=data-tambahG&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
  }
}



else
{
  ?>
        <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form Tambah Data.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Tambah Data
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
