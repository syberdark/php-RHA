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
$sql = "SELECT * FROM datac WHERE id= '$id'";
$q = mysqli_query($db,$sql);
$row = mysqli_fetch_array($q,MYSQLI_ASSOC);
?>                      
                        <form action="index.php?page=data-editC-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                            
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>C. Identifikasi</strong> Dampak Bencana
                            </div>
                          <div class="card-body card-block">

                          <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">1. Jumlah & Jenis Fasilitas Kesehatan yang Rusak :</label></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Rumah Sakit</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="rumsa" name="rumsa" placeholder="Buah" class="form-control" value="<?php echo $row['rumsa']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Puskesmas/Pustu</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="puskes" name="puskes" placeholder="Buah" class="form-control" value="<?php echo $row['puskes']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) Gudang Farmasi</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="far" name="far" placeholder="Buah" class="form-control" value="<?php echo $row['far']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                           <div class="row form-group"> 
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">2. Jumlah Rumah yang Rusak :</label></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Ringan</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="r_ringan" name="r_ringan" placeholder="Buah" class="form-control" value="<?php echo $row['r_ringan']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Berat</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="r_berat" name="r_berat" placeholder="Buah" class="form-control" value="<?php echo $row['r_berat']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                          <div class="row form-group"> 
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">3. Jumlah Sumber Air Bersih :</label></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Sumur</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="sumur" name="sumur" placeholder="Buah" class="form-control" value="<?php echo $row['sumur']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Sumur Tercemar</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="sumur_t" name="sumur_t" placeholder="Buah" class="form-control" value="<?php echo $row['sumur_t']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) PMA</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="pma" name="pma" placeholder="Buah" class="form-control" value="<?php echo $row['pma']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>
                            
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">d) PMA yang Rusak</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="pma_r" name="pma_r" placeholder="Buah" class="form-control" value="<?php echo $row['pma_r']; ?>"></div><label for="text-input" class=" form-control-label">Buah</label>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">4. Keadaan Jalan/Transportasi :</label></div>
                            <div class="col col-md-9">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline15" name="transportasi" value="Baik">
                                <label class="custom-control-label" for="defaultInline15">Baik</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline16" name="transportasi" value="Terputus">
                                <label class="custom-control-label" for="defaultInline16">Terputus (untuk roda 4)</label>
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">5. Keadaan Sarana Komunikasi/Telepon :</label></div>
                            <div class="col col-md-9">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline17" name="komunikasi" value="Baik">
                                <label class="custom-control-label" for="defaultInline17">Baik</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline18" name="komunikasi" value="Terputus">
                                <label class="custom-control-label" for="defaultInline18">Terputus</label>
                                
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">6. Keadaan Penerangan Listrik :</label></div>
                            <div class="col col-md-9">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline19" name="listrik" value="Baik">
                                <label class="custom-control-label" for="defaultInline19">Baik</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline20" name="listrik" value="Terputus">
                                <label class="custom-control-label" for="defaultInline20">Terputus</label>
                              </div>                                                       
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
                                     