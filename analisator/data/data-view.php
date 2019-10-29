<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><a class='btn btn-primary' href='index.php?page=data-read'><i class='fa fa-reply'></i></a> Rekap Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <li><a href="index.php?page=home">Dashboard</a></li>
                            <li class="active">Rekap Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

<?php

include "../koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM
dataa as a INNER JOIN datab as b ON a . id=b . id
           INNER JOIN datac as c ON b . id=c . id
           INNER JOIN datad as d ON c . id=d . id
           INNER JOIN datae as e ON d . id=e . id
           INNER JOIN dataf as f ON e . id=f . id
           INNER JOIN datag as g ON f . id=g . id
           INNER JOIN datah as h ON g . id=h . id
           INNER JOIN datai as i ON h . id=i . id
           INNER JOIN dataj as j ON i . id=j . id
           INNER JOIN datak as k ON j . id=k . id

           where a.id='$id'";

$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>
    
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
                <a class='btn btn-success' href='index2.php?page=pdf_download-data&id=<?php echo $id; ?>'><i class='fa fa-download'></i></a>
            <strong>Data</strong> Rinci
        </div>

    <div class="card-body card-block">



            <div class="row form-group">
                <div class="col col-md-3">
                    <strong>A. Jenis Bencana</strong>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">1. Jenis Bencana</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['jenis']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <strong>B. Lokasi Bencana</strong>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">1. Desa/Kelurahan</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['desa']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">2. Kecamatan</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['kecamatan']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">3. Kabupaten/Kota</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['kabupaten']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">4. Waktu Mulai Kejadian</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['w_mulai']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">5. Waktu Selesai Kejadian</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['w_selesai']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">6. Jenis Daerah Bencana</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['j_daerah']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">7. Jenis Lokasi Bencana</label></div>
                    <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['j_lokasi']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">8. Bila Banjir, Ketinggian Air Mencapai</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['t_air']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Meter</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">9. Lama Tergenang</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['lama_t']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Jam</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">10. Peta Lokasi Banjir</label></div>
                    <div class="col-3 col-md-4"><medium class="form-text text-muted">: <?php echo $row['peta']; ?></medium></div>
                    
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>C. Identifikasi Dampak Bencana</strong>
                </div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">1. Jumlah & Jenis Fasilitas Kesehatan yang Rusak :</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Rumah Sakit</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['rumsa']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Puskesmas/Pustu</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['puskes']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) Gudang Farmasi</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['far']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">2. Jumlah Rumah yang Rusak :</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Ringan</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['r_ringan']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Berat</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['r_berat']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">3. Jumlah Sumber Air Bersih :</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Sumur</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['sumur']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Sumur Tercemar</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['sumur_t']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) PMA</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['pma']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">d) PMA yang Rusak</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['pma_r']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">4. Keadaan Jalan/Transportasi</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['transportasi']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">5. Keadaan Sarana Komunikasi/Telepon</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['komunikasi']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">6. Keadaan Penerangan Listrik</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['listrik']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>D. Kondisi Korban</strong>
                </div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">1. Jumlah Penduduk Didaerah Bencana :</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) 0-5 Tahun</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['anak']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) >5 Tahun</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['manusia']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) Jumlah Ibu Hamil</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['hamil']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">2. Jumlah Balita Dengan Gizi Buruk</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['balita']; ?></medium></div>
                            <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

             <div class="row form-group">
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">3. Jumlah Korban :</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">a) Luka Ringan</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['l_ringan']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">b) Luka Berat</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['l_berat']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">c) Mati</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['mati']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">d) Hilang</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['hilang']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">e) Dirujuk</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['dirujuk']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">f) Dievakuasi</label></div>
                    <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['evakuasi']; ?></medium></div>
                    <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">4. Jumlah Penduduk yang Memerlukan Pelayanan Kesehatan Lingkungan Darurat</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['p_pelayanan']; ?></medium></div>
                            <div class="col-4 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>E. Kondisi Sanitasi Lingkungan Penampungan</strong>
                </div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">1. Jenis Tempat Penampungan</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['jenis_p']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">2. Kapasitas Penampungan Pengungsi</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['kapasitas_p']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">3. Kapasitas Penyediaan Air Bersih</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['kapasitas_a']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">4. Sarana MCK</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['mck']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">5. Tempat Pembuangan Sampah</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['t_pembuangan']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">6. Sarana SPAL</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['spal']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>F. Upaya Penanggulangan yang Telah Dilakukan</strong>
                </div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">1. Tim Penanggulangan Bencana</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['tim_p']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">2. Jumlah POSKES</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['j_poskes']; ?></medium></div>
                            <div class="col-3 col-md-1"><label for="text-input" class=" form-control-label">Buah</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">3. Jumlah Tenaga Kesehatan Terlibat di POSKES</label></div>
                            <div class="col-3 col-md-1"><medium class="form-text text-muted">: <?php echo $row['t_poskes']; ?></medium></div>
                            <div class="col-3 col-md-1"><label for="text-input" class=" form-control-label">Orang</label></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">4. Lainnya</label></div>
                            <div class="col-3 col-md-8"><medium class="form-text text-muted">: <?php echo $row['lainnya']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>G. Kemungkinan KLB yang Akan Terjadi</strong>
                </div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">1. Kemungkinan KLB yang Akan Terjadi</label></div>
                            <div class="col-3 col-md-8"><medium class="form-text text-muted">: <?php echo $row['klb']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>H. Kesiapan Logistik</strong>
                </div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">1. Persediaan Obat-Obatan</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['obat']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">2. Persediaan Kaporit</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['kaporit']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">3. Persediaan PAC</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['pac']; ?></medium></div>
            </div>          

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">4. Persediaan Aquatab</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['aquatab']; ?></medium></div>
            </div>

            <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">5. Keadaan Logistik Program P2P-M</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['p2pm']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>I. Klasifikasi Bencana</strong>
                </div>
            </div>

             <div class="row form-group">
                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">1. Klasifikasi Bencana</label></div>
                            <div class="col-3 col-md-3"><medium class="form-text text-muted">: <?php echo $row['k_bencana']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>J. Bantuan Segera yang Diperlukan</strong>
                </div>
            </div>

            <div class="row form-group">
                        
                            <div class="col col-md-10"><medium class="form-text text-muted"> <?php echo $row['bantuan']; ?></medium></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-7">
                    <strong>K. Rencana Tindak Lanjut</strong>
                </div>
            </div>

            <div class="row form-group">
                            
                            <div class="col col-md-11"><medium class="form-text text-muted"> <?php echo $row['rencana']; ?></medium></div>
            </div>














