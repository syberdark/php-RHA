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
$sql = "SELECT * FROM datae WHERE id= '$id'";
$q = mysqli_query($db,$sql);
$row = mysqli_fetch_array($q,MYSQLI_ASSOC);
?>                      
                        <form action="index.php?page=data-editE-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                            
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>E. Kondisi</strong> Sanitasi Lingkungan Penampungan
                            </div>
                          <div class="card-body card-block">

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">1. Jenis Tempat Penampungan :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline21" name="jenis_p" value="Bangunan Permanen">
                                <label class="custom-control-label" for="defaultInline21">Bangunan Permanen</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline22" name="jenis_p" value="Bangunan Darurat">
                                <label class="custom-control-label" for="defaultInline22">Bangunan Darurat</label>
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">2. Kapasitas Penampungan Pengungsi :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline23" name="kapasitas_p" value="Memadai">
                                <label class="custom-control-label" for="defaultInline23">Memadai(Min.: 10m3/orang)</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline24" name="kapasitas_p" value="Tidak Memadai">
                                <label class="custom-control-label" for="defaultInline24">Tidak Memadai</label>
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">3. Kapasitas Penyediaan Air Bersih :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline25" name="kapasitas_a" value="Memadai">
                                <label class="custom-control-label" for="defaultInline25">Memadai(Min.: 20lt/orang/hari)</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline26" name="kapasitas_a" value="Tidak Memadai">
                                <label class="custom-control-label" for="defaultInline26">Tidak Memadai</label>
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">4. Sarana MCK :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline27" name="mck" value="Memadai">
                                <label class="custom-control-label" for="defaultInline27">Memadai(Maks.: 40orang/1 MCK)</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline28" name="mck" value="Tidak Memadai">
                                <label class="custom-control-label" for="defaultInline28">Tidak Memadai</label>
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">5. Tempat Pembuangan Sampah :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline29" name="t_pembuangan" value="Memadai">
                                <label class="custom-control-label" for="defaultInline29">Memadai(Min.: 3 m3/60 orang) </label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline30" name="t_pembuangan" value="Tidak Memadai">
                                <label class="custom-control-label" for="defaultInline30">Tidak Memadai</label>
                              </div>                                                       
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">6. Sarana SPAL :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline31" name="spal" value="Memadai">
                                <label class="custom-control-label" for="defaultInline31">Memadai(Min.: 4m dari penampungan)</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline32" name="spal" value="Tidak Memadai">
                                <label class="custom-control-label" for="defaultInline32">Tidak Memadai</label>
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
                                     