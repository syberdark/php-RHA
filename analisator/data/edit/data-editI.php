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

        <div class="content mt-3">

        <div class="col-lg-12">
                    
 
 <?php
include "../koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM datai WHERE id= '$id'";
$q = mysqli_query($db,$sql);
$row = mysqli_fetch_array($q,MYSQLI_ASSOC);
?>                      
                        <form action="index.php?page=data-editI-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                            
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>I. Klasifikasi</strong> Bencana
                            </div>
                          <div class="card-body card-block">

                         <!-- Default inline 1-->
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline49" name="k_bencana" value="Ringan">
                            <label class="custom-control-label" for="defaultInline49">Ringan</label>
                          </div>

                          <!-- Default inline 2-->
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline50" name="k_bencana" value="Sedang">
                            <label class="custom-control-label" for="defaultInline50">Sedang</label>
                          </div>

                          <!-- Default inline 3-->
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline51" name="k_bencana" value="Berat">
                            <label class="custom-control-label" for="defaultInline51">Berat</label>
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
                                     