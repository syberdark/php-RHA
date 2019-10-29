<div class="col-lg-12">

<h3 align="center">Aduan Masyarakat</h3>
<br />
                    
                      
                        <form action="index.php?page=aduan-notif" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="card">
                            <div class="card-header">
                              <strong>A</strong> Identitas Diri
                            </div>
                          <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama  </label></div>
                            <div class="col-11 col-md-3"><input type="text" id="nama" name="nama" placeholder="nama..." class="form-control"></div>
                            </div>
                            

                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat  </label></div>
                            <div class="col-11 col-md-3"><input type="text" id="alamat" name="alamat" placeholder="alamat..." class="form-control"></div>

                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                  <input type="radio" id="jns_kelamin" name="jns_kelamin" value="Laki-Laki" class="form-check-input">Laki-Laki
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="jns_kelamin" name="jns_kelamin" value="Perempuan" class="form-check-input">Perempuan
                                </label>
                              </div>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor HP  </label></div>
                            <div class="col-11 col-md-3"><input type="text" id="no_hp" name="no_hp" placeholder="08xxxx" class="form-control"></div>

                          </div>

                       	</div>
                       	</div>

                      
                          <br />

                          <div class="card">
                            <div class="card-header">
                              <strong>B</strong> Aduan
                            </div>
                          <div class="card-body card-block">
                          


                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Bencana </label></div>
                            <div class="col-12 col-md-3"><input type="text" id="jenis_bencana" name="jenis_bencana" placeholder="Jenis" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Kejadian </label></div>
                            <div class="col-12 col-md-3"><input type="text" id="tmpt_kejadian" name="tmpt_kejadian" placeholder="tempat" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Foto</label></div>
                            <input type="file" name="foto" id="foto" />
                          </div>

                          </div>
                          </div>
                          </div>
                         



                      <div class="card-footer">
                        <button type="submit" class="btn btn-danger btn-sm" href= >
                          <i class="fa fa-plane"></i> Kirim
                        </button>
                        </form>