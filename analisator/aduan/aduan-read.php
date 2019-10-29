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


    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Aduan</strong> Masyarakat
        </div>
    <div class="card-body card-block">


<?php
include "../koneksi.php";
$query = "SELECT * FROM aduan";
$no=0;

$data = mysqli_query($db,$query);
echo "<table class='table table-striped'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Nama Pelapor</th>";
echo "<th>Alamat Pelapor</th>";
echo "<th>Jenis Bencana</th>";
echo "<th>Tempat Bencana</th>";
echo "<th colspan='3' align='center'>Action</th>";
echo "</tr>";
echo "</thead>";
while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
{
    $no++;
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['jenis_bencana']."</td>";
    echo "<td>".$row['tmpt_kejadian']."</td>";
    
    $href = "index.php?page=aduan-view&id=".$row['id'];
    $btn = "<a class='btn btn-primary' href='$href'><i class='fa fa-eye'></i></a>";
    echo "<td>".$btn;

    $href1 = "index.php?page=aduan-hapus-notif&id=".$row['id'];
    $btn1 = "<a class='btn btn-danger' href='$href1'><i class='fa fa-trash'></i></a>";
    echo $btn1;

    

}
echo "</table>";
?>


</div>
</div>

<p>Total: <?php echo mysqli_num_rows($data) ?></p>

</div>
</div>

