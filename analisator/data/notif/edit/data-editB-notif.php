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
if (isset($_GET['id']) AND isset($_POST['desa']) AND isset($_POST['kecamatan']) AND isset($_POST['kabupaten']) AND isset($_POST['w_mulai']) AND isset($_POST['w_selesai']) AND isset($_POST['j_daerah']) AND isset($_POST['j_lokasi']) AND isset($_POST['t_air']) AND isset($_POST['lama_t']) AND isset($_POST['peta']))
{
    include "../koneksi.php";


    $id = $_GET['id'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $w_mulai = $_POST['w_mulai'];
    $w_selesai = $_POST['w_selesai'];
    $j_daerah = $_POST['j_daerah'];
    $j_lokasi = $_POST['j_lokasi'];
    $t_air = $_POST['t_air'];
    $lama_t = $_POST['lama_t'];
    $peta = $_POST['peta'];
    $user = $_SESSION['nama'];


  if(empty($desa))
  {
    ?>
                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Desa Harus Diisi.
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


                <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    if(empty($kecamatan))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Kecamatan Harus Diisi.
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


                <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
        if(empty($kabupaten))
        {
          ?>

                    <div class="col-sm-12">
                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                      <span class="badge badge-pill badge-warning">Warning!</span> Data Kabupaten Harus Diisi.
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


                    <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                       
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
          if(empty($w_mulai))
          {
            ?>

                      <div class="col-sm-12">
                      <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-warning">Warning!</span> Waktu Mulai Kejadian Harus Diisi.
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


                      <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                         
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
            if(empty($w_selesai))
            {
              ?>

                        <div class="col-sm-12">
                        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                          <span class="badge badge-pill badge-warning">Warning!</span> Waktu Selesai Kejadian Harus Diisi.
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


                        <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                           
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
                if(empty($j_daerah))
                {
                  ?>

                            <div class="col-sm-12">
                            <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                              <span class="badge badge-pill badge-warning">Warning!</span> Jenis Daerah Bencana Harus Diisi.
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


                            <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                               
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
                  if(empty($j_lokasi))
                  {
                    ?>

                              <div class="col-sm-12">
                              <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-warning">Warning!</span> Jenis Lokasi Bencana Harus Diisi.
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


                              <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
                    if(empty($t_air))
                    {
                      ?>

                                <div class="col-sm-12">
                                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-warning">Warning!</span> Ketinggian Air Harus Diisi.
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


                                <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                   
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
                      if(empty($lama_t))
                      {
                        ?>

                                  <div class="col-sm-12">
                                  <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-warning">Warning!</span> Data Lama Tergenang Harus Diisi.
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


                                  <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                     
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
                        if(empty($peta))
                        {
                          ?>

                                    <div class="col-sm-12">
                                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                      <span class="badge badge-pill badge-warning">Warning!</span> Peta Lokasi Banjir Harus Diisi.
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


                                    <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                       
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
                $query = "UPDATE datab SET
                desa='$desa',
                kecamatan='$kecamatan',
                kabupaten='$kabupaten',
                w_mulai='$w_mulai',
                w_selesai='$w_selesai',
                j_daerah='$j_daerah',
                j_lokasi='$j_lokasi',
                t_air='$t_air',
                lama_t='$lama_t',
                peta='$peta',
                user='$user'
                WHERE id='$id'"; 
            }
            else
              {

                $query = "INSERT INTO datab (id,desa,kecamatan,kabupaten,w_mulai,w_selesai,j_daerah,j_lokasi,t_air,lama_t,peta,user) VALUES ('$id','$desa','$kecamatan','$kabupaten','$w_mulai','$w_selesai','$j_daerah','$j_lokasi','$t_air','$lama_t','$peta','$user')";
              }
                $sql = mysqli_query($db, $query);
                if($sql)
                {
                  ?>    
                  <div class="col-sm-12">
                      <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">Selamat!</span> Data berhasil diedit.
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
                
                <form action="index.php?page=data-editC&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                                    
                                
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
       

                      <form action="index.php?page=data-editB&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
