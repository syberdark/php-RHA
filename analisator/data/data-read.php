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
                            <li class="active">Rekap Data</li>
                        </ol>
                       </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Rekap</strong> Data
        </div>
    <div class="card-body card-block">

<form action="index.php?page=data-tambahA" method="post" enctype="multipart/form-data" class="form-horizontal">    
                
                        <button type="submit" class="btn btn-primary btn-sm" href= >
                          <i class="fa fa-plus"></i> Tambah Data </button>
</form>
<br />

<?php
require_once "../koneksi.php";
$query = "SELECT * FROM dataa AS u INNER JOIN datab AS i ON u.id=i.id";
$no=0;

$data = mysqli_query($db,$query);
echo "<table class='table table-striped'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Nama Bencana</th>";
echo "<th>Tanggal</th>";
echo "<th>Tempat Kejadian</th>";
echo "<th colspan='3' align='center'>Action</th>";
echo "</tr>";
echo "</thead>";
while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
{
    $no++;
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$row['jenis']."</td>";
    echo "<td>".$row['w_mulai']."</td>";
    echo "<td>".$row['kabupaten']."</td>";

    
    $href = "index.php?page=data-editA&id=".$row['id'];
    $btn = "<a class='btn btn-primary' href='$href'><i class='fa fa-edit'></i></a>";
    echo "<td>".$btn;

    $href1 = "index.php?page=data-hapus-notif&id=".$row['id'];
    $btn1 = "<a class='btn btn-danger' href='$href1'><i class='fa fa-trash'></i></a>";
    echo $btn1;

    $href2 = "index.php?page=data-view&id=".$row['id'];
    $btn2 = "<a class='btn btn-success' href='$href2'><i class='fa fa-eye'></i></a>";
    echo $btn2."</td>";
    echo "</tr>";
    
}
echo "</table>";
?>


</div>
</div>

<p>Total: <?php echo mysqli_num_rows($data) ?></p>

</div>
</div>

