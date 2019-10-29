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
                        
                      
                        <form action="index.php?page=data-tambahB-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>B. Lokasi</strong> Bencana
                            </div>
                          <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Desa/Kelurahan  </label></div>
                            <div class="col-12 col-md-5"><input type="text" id="desa" name="desa" placeholder="Desa/Kelurahan" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kab/Kota</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="kabupaten" name="kabupaten" placeholder="Kab/Kota" class="form-control"></div>
                          </div>  

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu Kejadian  :</label></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mulai</label></div>
                            <div class="col-12 col-md-3"><input type="date" id="w_mulai" name="w_mulai" placeholder="YYYY-MM-DD" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Selesai</label></div>
                            <div class="col-12 col-md-3"><input type="date" id="w_selesai" name="w_selesai" placeholder="YYYY-MM-DD" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Daerah Bencana</label></div>
                            <div class="col-12 col-md-5"><input type="text" id="j_daerah" name="j_daerah" placeholder="Jenis Daerah" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Jenis Lokasi Bencana</label></div>
                            <div class="col col-md-9">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline10" name="j_lokasi" value="Pedesaan">
                                <label class="custom-control-label" for="defaultInline10">Pedesaan</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline11" name="j_lokasi" value="Perkotaan">
                                <label class="custom-control-label" for="defaultInline11">Perkotaan</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline12" name="j_lokasi" value="Pedesaan dan Perkotaan">
                                <label class="custom-control-label" for="defaultInline12">Pedesaan dan Perkotaan</label>
                              </div>                                                        
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bila Banjir, ketinggian air mencapai</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="t_air" name="t_air" placeholder="Meter" class="form-control"></div><label for="text-input" class=" form-control-label">Meter</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama Tergenang</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="lama_t" name="lama_t" placeholder="Jam" class="form-control"></div><label for="text-input" class=" form-control-label">Jam</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Peta Lokasi Banjir</label></div>
                            <div class="col col-md-9">
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline13" name="peta" value="Ada">
                                <label class="custom-control-label" for="defaultInline13">Ada</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline14" name="peta" value="Tidak">
                                <label class="custom-control-label" for="defaultInline14">Tidak</label>
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
                                     