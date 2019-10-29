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

        <div class="content mt-3">

        <div class="col-lg-12">
                    
 
 <?php
include "../koneksi.php";
$id = $_GET['id'];
?>                      
                        <form action="index.php?page=data-tambahH-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                            
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>H. Kesiapan</strong> Logistik
                            </div>
                          <div class="card-body card-block">

                           <div class="row form-group">
                            <div class="col col-md-4"><label class=" form-control-label">1. Persediaan Obat-Obatan :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline35" name="obat" value="Tidak Ada">
                                <label class="custom-control-label" for="defaultInline35">Tidak Ada</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline36" name="obat" value="Kurang">
                                <label class="custom-control-label" for="defaultInline36">Kurang</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline37" name="obat" value="Cukup">
                                <label class="custom-control-label" for="defaultInline37">Cukup</label>
                              </div>                                                       
                            </div>

                            <div class="col col-md-4"><label class=" form-control-label">2. Persediaan Kaporit :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline38" name="kaporit" value="Tidak Ada">
                                <label class="custom-control-label" for="defaultInline38">Tidak Ada</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline39" name="kaporit" value="Kurang">
                                <label class="custom-control-label" for="defaultInline39">Kurang</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline40" name="kaporit" value="Cukup">
                                <label class="custom-control-label" for="defaultInline40">Cukup</label>
                              </div>                                                       
                            </div>

                            <div class="col col-md-4"><label class=" form-control-label">3. Persediaan PAC :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline41" name="pac" value="Tidak Ada">
                                <label class="custom-control-label" for="defaultInline41">Tidak Ada</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline42" name="pac" value="Kurang">
                                <label class="custom-control-label" for="defaultInline42">Kurang</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline43" name="pac" value="Cukup">
                                <label class="custom-control-label" for="defaultInline43">Cukup</label>
                              </div>                                                       
                            </div>

                            <div class="col col-md-4"><label class=" form-control-label">4. Persediaan Aquatab :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline44" name="aquatab" Value="Tidak Ada">
                                <label class="custom-control-label" for="defaultInline44">Tidak Ada</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline45" name="aquatab" value="Kurang">
                                <label class="custom-control-label" for="defaultInline45">Kurang</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline46" name="aquatab" value="Cukup">
                                <label class="custom-control-label" for="defaultInline46">Cukup</label>
                              </div>                                                       
                            </div>

                            <div class="col col-md-4"><label class=" form-control-label">5. Keadaan Logistik Program P2P-M :</label></div>
                            <div class="col col-md-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline47" name="p2pm" value="Baik">
                                <label class="custom-control-label" for="defaultInline47">Baik</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline48" name="p2pm" value="Rusak">
                                <label class="custom-control-label" for="defaultInline48">Rusak (Gunakan Form BA-2)</label>
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
                                     