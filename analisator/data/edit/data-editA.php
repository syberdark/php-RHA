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


include "../koneksi.php";


$id = $_GET['id'];
$sql = "SELECT * FROM dataa WHERE id= '$id'";
$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>

        <div class="content mt-3">

        <div class="col-lg-12">
                    
                      
                        <form action="index.php?page=data-editA-notif" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="card">
                            <div class="card-header">
                              <strong>ID</strong> Data
                            </div>
                          <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Data  </label></div>
                            <div class="col-12 col-md-3"><input type="text" id="id" name="id" placeholder="ID" class="form-control" readonly value="<?php echo $row['id']; ?>"></div>
                          </div>
                          </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                              <strong>A. Jenis</strong> Bencana
                            </div>
                          <div class="card-body card-block">
                          


                          <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Bencana </label></div>
                            <div class="col-12 col-md-3"><input type="text" id="jenis" name="jenis" placeholder="Jenis" class="form-control" value="<?php echo $row['jenis']; ?>"></div>
                          </div>
                          </div>
                          </div>
                          </div>
                         



                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-forward"></i> Selanjutnya
                        </button>
                        </form>

                        <a role="button" class="btn btn-primary btn-sm" href="index.php?page=data-read">
                        <i class="fa fa-reply"></i>
                           <font color="white">Kembali</font> </a>

</div>
                                     