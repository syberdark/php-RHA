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
if (isset($_GET['id']) AND isset($_POST['rumsa']) AND isset($_POST['puskes']) AND isset($_POST['far']) AND isset($_POST['r_ringan']) AND isset($_POST['r_berat']) AND isset($_POST['sumur']) AND isset($_POST['sumur_t']) AND isset($_POST['pma']) AND isset($_POST['pma_r']) AND isset($_POST['transportasi']) AND isset($_POST['komunikasi']) AND isset($_POST['listrik']))
{
    include "../koneksi.php";


    $id = $_GET['id'];
    $rumsa = $_POST['rumsa'];
    $puskes = $_POST['puskes'];
    $far = $_POST['far'];
    $r_ringan = $_POST['r_ringan'];
    $r_berat = $_POST['r_berat'];
    $sumur = $_POST['sumur'];
    $sumur_t = $_POST['sumur_t'];
    $pma = $_POST['pma'];
    $pma_r = $_POST['pma_r'];
    $transportasi = $_POST['transportasi'];
    $komunikasi = $_POST['komunikasi'];
    $listrik = $_POST['listrik'];
    $user = $_SESSION['nama'];


  if(empty($rumsa))
  {
    ?>
                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Jumlah Rumah Sakit Harus Diisi.
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


                <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    if(empty($puskes))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Jumlah Puskesmas Harus Diisi.
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


                <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
        if(empty($far))
        {
          ?>

                    <div class="col-sm-12">
                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                      <span class="badge badge-pill badge-warning">Warning!</span> Data Jumlah Gudang Farmasi Harus Diisi.
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


                    <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                       
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
          if(empty($r_ringan))
          {
            ?>

                      <div class="col-sm-12">
                      <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-warning">Warning!</span> Data Rumah yang Rusak Ringan Harus Diisi.
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


                      <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                         
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
            if(empty($r_berat))
            {
              ?>

                        <div class="col-sm-12">
                        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                          <span class="badge badge-pill badge-warning">Warning!</span> Data Rumah yang Rusak Berat Harus Diisi.
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


                        <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                           
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
                if(empty($sumur))
                {
                  ?>

                            <div class="col-sm-12">
                            <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                              <span class="badge badge-pill badge-warning">Warning!</span> Data Sumur Harus Diisi.
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


                            <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                               
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
                  if(empty($sumur_t))
                  {
                    ?>

                              <div class="col-sm-12">
                              <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-warning">Warning!</span> Data Sumur Tercemar Harus Diisi.
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


                              <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
                    if(empty($pma))
                    {
                      ?>

                                <div class="col-sm-12">
                                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-warning">Warning!</span> Data PMA Harus Diisi.
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


                                <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                   
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
                      if(empty($pma_r))
                      {
                        ?>

                                  <div class="col-sm-12">
                                  <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-warning">Warning!</span> Data PMA yang Rusak Harus Diisi.
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


                                  <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                     
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
                        if(empty($transportasi))
                        {
                          ?>

                                    <div class="col-sm-12">
                                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                      <span class="badge badge-pill badge-warning">Warning!</span> Data Keadaan Transportasi Harus Diisi.
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


                                    <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                       
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
                          if(empty($komunikasi))
                          {
                            ?>

                                      <div class="col-sm-12">
                                      <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                        <span class="badge badge-pill badge-warning">Warning!</span> Data Sarana Komunikasi Harus Diisi.
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


                                      <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                         
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
                            if(empty($listrik))
                            {
                              ?>

                                        <div class="col-sm-12">
                                        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                          <span class="badge badge-pill badge-warning">Warning!</span> Data Keadaan Penerangan Listrik Harus Diisi.
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


                                        <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                           
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
                $query = "UPDATE datac SET
                rumsa='$rumsa',
                puskes='$puskes',
                far='$far',
                r_ringan='$r_ringan',
                r_berat='$r_berat',
                sumur='$sumur',
                sumur_t='$sumur_t',
                pma='$pma',
                pma_r='$pma_r',
                transportasi='$transportasi',
                komunikasi='$komunikasi',
                listrik='$listrik',
                user='$user'
                WHERE id='$id'"; 
            }
            else
              {
          
                $query = "INSERT INTO datac (id,rumsa,puskes,far,r_ringan,r_berat,sumur,sumur_t,pma,pma_r,transportasi,komunikasi,listrik,user) VALUES ('$id','$rumsa','$puskes','$far','$r_ringan','$r_berat','$sumur','$sumur_t','$pma','$pma_r','$transportasi','$komunikasi','$listrik','$user')";
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
                
                <form action="index.php?page=data-editD&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                                    
                                
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
       

                      <form action="index.php?page=data-editC&id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
