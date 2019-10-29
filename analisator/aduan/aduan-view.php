<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Aduan Masyarakat</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php?page=home">Dashboard</a></li>
                            <li class="active">Aduan Masyarakat</li>
                        </ol>
                    </div>
                </div>
            </div> 
        </div>

        <div class="content mt-3">

<?php

include "../koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM aduan WHERE id= '$id'";
$q = mysqli_query($db,$sql);

$row = mysqli_fetch_array($q,MYSQLI_ASSOC);

?>

    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <a type="button" class="btn btn-primary btn-sm" href="index.php?page=aduan-read" >
            <i class="fa fa-arrow-left"></i>
        </a>
            <strong><?php echo $row['nama']; ?></strong>
        </div>
    <div class="card-body card-block">
                            
                            <div class="row form-group">
                            <div class="col-12 col-md-10" align="center"><?php echo "<img class='img-thumbnail' src='../images/aduan/".$row['foto']."' width='300' align='center' >"; ?></div>
                            
                          </div>                            

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pelapor</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['nama']; ?></medium></div>
                          </div>
                    

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Pelapor</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['alamat']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['jns_kelamin']; ?></medium></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Nomor HP</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['no_hp']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Bencana</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['jenis_bencana']; ?></medium></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Kejadian</label></div>
                            <div class="col-12 col-md-5"><medium class="form-text text-muted">: <?php echo $row['tmpt_kejadian']; ?></medium></div>
                          </div>

                           
    
    
    </form>
                          
      
     
      




