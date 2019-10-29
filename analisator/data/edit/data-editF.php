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
$sql = "SELECT * FROM dataf WHERE id= '$id'";
$q = mysqli_query($db,$sql);
$row = mysqli_fetch_array($q,MYSQLI_ASSOC);
?>                      
                        <form action="index.php?page=data-editF-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                            
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>F. Upaya</strong> Penanggulangan yang Telah Dilakukan
                            </div>
                          <div class="card-body card-block">

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">1. Tim Penanggulangan Bencana :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline33" name="tim_p" value="Ada">
                                <label class="custom-control-label" for="defaultInline33">Ada</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline34" name="tim_p" value="Tidak Ada">
                                <label class="custom-control-label" for="defaultInline34">Tidak Ada</label>
                              </div>                                                       
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">2. Jumlah POSKES :</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="j_poskes" name="j_poskes" placeholder="Buah" class="form-control" value="<?php echo $row['j_poskes']; ?>"></div><label for="text-input" class=" form-control-label">buah</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">3. Jumlah Tenaga Kesehatan Terlibat di POSKES :</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="t_poskes" name="t_poskes" placeholder="Orang" class="form-control" value="<?php echo $row['t_poskes']; ?>"></div><label for="text-input" class=" form-control-label">orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">4. Lainnya :</label></div>
                          </div>

                          <div class="row form-group">
                            <div class="col-12 col-md-9"><textarea name="lainnya" id="lainnya" rows="9" placeholder="..." class="form-control"><?php echo $row['lainnya']; ?></textarea></div>
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
                                     