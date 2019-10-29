<div class="col-lg-12">

<?php

if (isset($_POST['nama']) AND isset($_POST['alamat']) AND isset($_POST['jns_kelamin']) AND isset($_POST['no_hp']) AND isset($_POST['jenis_bencana']) AND isset($_POST['tmpt_kejadian']))
{


    include "../koneksi.php";


    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $no_hp = $_POST['no_hp'];
    $jenis_bencana = $_POST['jenis_bencana'];
    $tmpt_kejadian = $_POST['tmpt_kejadian'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];


    $fotobaru = date('dmYHis').$foto;
    $path = "../images/aduan/".$fotobaru;


  if(empty($nama))
  {
    ?>
                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Nama Harus Diisi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Isi Aduan
                            </div>
                            <div class="card-body card-block">


                <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
    if(empty($alamat))
    {
      ?>

                <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-warning">Warning!</span> Data Alamat Harus Diisi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Proses</strong> Isi Aduan
                            </div>
                            <div class="card-body card-block">


                <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
        if(empty($jns_kelamin))
        {
          ?>

                    <div class="col-sm-12">
                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                      <span class="badge badge-pill badge-warning">Warning!</span> Data Jenis Kelamin Harus Diisi.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Proses</strong> Isi Aduan
                                </div>
                                <div class="card-body card-block">


                    <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                       
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
          if(empty($no_hp))
          {
            ?>

                      <div class="col-sm-12">
                      <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-warning">Warning!</span> Data Nomor HP Harus Diisi.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-header">
                                  <strong>Proses</strong> Isi Aduan
                                  </div>
                                  <div class="card-body card-block">


                      <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                         
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
            if(empty($jenis_bencana))
            {
              ?>

                        <div class="col-sm-12">
                        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                          <span class="badge badge-pill badge-warning">Warning!</span> Data Jenis Bencana Harus Diisi.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Proses</strong> Isi Aduan
                                    </div>
                                    <div class="card-body card-block">


                        <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                           
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
                if(empty($tmpt_kejadian))
                {
                  ?>

                            <div class="col-sm-12">
                            <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                              <span class="badge badge-pill badge-warning">Warning!</span> Data Tempat Kejadian Harus Diisi.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Proses</strong> Isi Aduan
                                        </div>
                                        <div class="card-body card-block">


                            <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                               
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
            if(move_uploaded_file($tmp, $path))
    		{
    			$q = "SELECT max(id) as maxId FROM aduan";
                $hasil = mysqli_query($db, $q);
                $dat = mysqli_fetch_array($hasil);
                $id = $dat['maxId'];

                $id++;

                $query = "INSERT INTO aduan (id,nama,alamat,jns_kelamin,no_hp,jenis_bencana,tmpt_kejadian,foto) VALUES ('$id','$nama','$alamat','$jns_kelamin','$no_hp','$jenis_bencana','$tmpt_kejadian','$fotobaru')";
                $sql = mysqli_query($db, $query);
                if($sql)
                {
                  ?>    
                  <div class="col-sm-12">
                      <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">Selamat!</span> Data berhasil dikirim.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
            
                    <div class="content mt-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                <strong>Proses</strong> Isi Aduan
                                </div>
                                    <div class="card-body card-block">
                
                <form action="index.php" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                                    
                                
                                <button type="submit" class="btn btn-primary btn-sm" href= >
                                  <i class="fa fa-home"></i> Halaman Utama
                                  
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
                                      <strong>Proses</strong> Isi Aduan
                                      </div>
                                          <div class="card-body card-block">
       

                      <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                 
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
  else
    {
  // Jika gambar gagal diupload, Lakukan :
    ?>
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Maaf, gambar gagal untuk diupload.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> Isi Aduan
                        </div>
                            <div class="card-body card-block">
        
        <form action="index.php?page=aduan" method="post" enctype="multipart/form-data" class="form-horizontal">    
                   
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
else
{
  ?>
        <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-danger">Gagal!</span> Maaf Anda Sebelumnya Harus Mengakses Halaman Ini Pada Form Isi Aduan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        <div class="content mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <strong>Proses</strong> isi Aduan
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
