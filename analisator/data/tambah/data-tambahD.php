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
                        <form action="index.php?page=data-tambahD-notif&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                         
                            
                            <!-- <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" placeholder="ID" valueclass="form-control"> -->
                          

                         <div class="card">
                            <div class="card-header">
                              <strong>D. Kondisi</strong> Korban
                            </div>
                          <div class="card-body card-block">

                          <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">1. Jumlah Penduduk Di Daerah Bencana :</label></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) 0-5 tahun</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="anak" name="anak" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) >5 tahun</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="manusia" name="manusia" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) Jumlah Ibu Hamil</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="hamil" name="hamil" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">2. Jumlah Balita dengan Gizi Buruk :</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="balita" name="balita" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">3. Jumlah Korban :</label></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Luka Ringan</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="l_ringan" name="l_ringan" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Luka Berat</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="l_berat" name="l_berat" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) Mati</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="mati" name="mati" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">d) Hilang</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="hilang" name="hilang" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">e) Dirujuk</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="dirujuk" name="dirujuk" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">f) Dievakuasi</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="evakuasi" name="evakuasi" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">4. Jumlah Penduduk yang Memerlukan Pelayanan Kesehatan Lingkungan Darurat :</label></div>
                            <div class="col-12 col-md-2"><input type="text" id="p_pelayanan" name="p_pelayanan" placeholder="Orang" class="form-control"></div><label for="text-input" class=" form-control-label">Orang</label>
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
                                     