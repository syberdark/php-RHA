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
                            <li class="active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<?php
if (isset($_GET['id']) AND isset($_POST['anak']) AND isset($_POST['manusia']) AND isset($_POST['hamil']) AND isset($_POST['balita']) AND isset($_POST['l_ringan']) AND isset($_POST['l_berat']) AND isset($_POST['mati']) AND isset($_POST['hilang']) AND isset($_POST['dirujuk']) AND isset($_POST['evakuasi']) AND isset($_POST['p_pelayanan']))
{
    include "../koneksi.php";


    $id = $_GET['id'];
    $anak = $_POST['anak'];
    $manusia = $_POST['manusia'];
    $hamil = $_POST['hamil'];
    $balita = $_POST['balita'];
    $l_ringan = $_POST['l_ringan'];
    $l_berat = $_POST['l_berat'];
    $mati = $_POST['mati'];
    $hilang = $_POST['hilang'];
    $dirujuk = $_POST['dirujuk'];
    $evakuasi = $_POST['evakuasi'];
    $p_pelayanan = $_POST['p_pelayanan'];
    $user = $_SESSION['nama'];


  if(empty($anak))
  {
    ?>
                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Penduduk dibawah 5 Tahun Harus Diisi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Edit Data
                            </div>
                            <div class="card-body card-block">


                <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    if(empty($manusia))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Penduduk Diatas 5 Tahun Harus Diisi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Edit Data
                            </div>
                            <div class="card-body card-block">


                <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
        if(empty($hamil))
        {
          ?>

                    <div class="col-sm-12">
                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                      <span class="badge badge-pill badge-warning">Warning!</span> Data Penduduk Ibu Hamil Harus Diisi.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Proses</strong> Edit Data
                                </div>
                                <div class="card-body card-block">


                    <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                       
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
          if(empty($balita))
          {
            ?>

                      <div class="col-sm-12">
                      <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-warning">Warning!</span> Data Balita dengan Gizi Buruk Harus Diisi.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-header">
                                  <strong>Proses</strong> Edit Data
                                  </div>
                                  <div class="card-body card-block">


                      <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                         
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
            if(empty($l_ringan))
            {
              ?>

                        <div class="col-sm-12">
                        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                          <span class="badge badge-pill badge-warning">Warning!</span> Data Luka Ringan Harus Diisi.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Proses</strong> Edit Data
                                    </div>
                                    <div class="card-body card-block">


                        <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                           
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
                if(empty($l_berat))
                {
                  ?>

                            <div class="col-sm-12">
                            <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                              <span class="badge badge-pill badge-warning">Warning!</span> Data Luka Berat Harus Diisi.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Proses</strong> Edit Data
                                        </div>
                                        <div class="card-body card-block">


                            <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                               
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
                  if(empty($mati))
                  {
                    ?>

                              <div class="col-sm-12">
                              <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-warning">Warning!</span> Data Korban yang Mati Harus Diisi.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="card">
                                      <div class="card-header">
                                          <strong>Proses</strong> Edit Data
                                          </div>
                                          <div class="card-body card-block">


                              <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
                    if(empty($hilang))
                    {
                      ?>

                                <div class="col-sm-12">
                                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-warning">Warning!</span> Data Korban yang Hilang Harus Diisi.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Proses</strong> Edit Data
                                            </div>
                                            <div class="card-body card-block">


                                <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                   
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
                      if(empty($dirujuk))
                      {
                        ?>

                                  <div class="col-sm-12">
                                  <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-warning">Warning!</span> Data Korban yang Dirujuk Harus Diisi.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  </div>

                                  <div class="col-lg-12">
                                      <div class="card">
                                          <div class="card-header">
                                              <strong>Proses</strong> Edit Data
                                              </div>
                                              <div class="card-body card-block">


                                  <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                     
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
                        if(empty($evakuasi))
                        {
                          ?>

                                    <div class="col-sm-12">
                                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                      <span class="badge badge-pill badge-warning">Warning!</span> Data Korban yang Dievakuasi Harus Diisi.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Proses</strong> Edit Data
                                                </div>
                                                <div class="card-body card-block">


                                    <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                       
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
                          if(empty($p_pelayanan))
                          {
                            ?>

                                      <div class="col-sm-12">
                                      <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                        <span class="badge badge-pill badge-warning">Warning!</span> Data Penduduk yang Memerlukan Pelayanan Harus Diisi.
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      </div>

                                      <div class="col-lg-12">
                                          <div class="card">
                                              <div class="card-header">
                                                  <strong>Proses</strong> Edit Data
                                                  </div>
                                                  <div class="card-body card-block">


                                      <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                         
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
          $query = "SELECT * FROM dataa WHERE id= '$id'";

            $cek = mysqli_query($db,$query);

            $num = mysqli_num_rows($cek);
            if($num > 0)
            {
                $query = "UPDATE datad SET
                anak='$anak',
                manusia='$manusia',
                hamil='$hamil',
                balita='$balita',
                l_ringan='$l_ringan',
                l_berat='$l_berat',
                mati='$mati',
                hilang='$hilang',
                dirujuk='$dirujuk',
                evakuasi='$evakuasi',
                p_pelayanan='$p_pelayanan',
                user='$user'
                WHERE id='$id'"; 
            }
            else
            {
          
                $query = "INSERT INTO datad (id,anak,manusia,hamil,balita,l_ringan,l_berat,mati,hilang,dirujuk,evakuasi,p_pelayanan,user) VALUES ('$id','$anak','$manusia','$hamil','$balita','$l_ringan','$l_berat','$mati','$hilang','$dirujuk','$evakuasi','$p_pelayanan','$user')";
            }

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
                                <strong>Proses</strong> Edit Data
                                </div>
                                    <div class="card-body card-block">
                
                <form action="index.php?page=data-editE&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                                    
                                
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
                                      <strong>Proses</strong> Edit Data
                                      </div>
                                          <div class="card-body card-block">
       

                      <form action="index.php?page=data-editD&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
}
}
}
}
}
}
}
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
                        <strong>Proses</strong> Edit Data
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
