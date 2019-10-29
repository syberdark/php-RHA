<?php
require_once "../ceklogin.php";
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rapid Health Assesment</title>
    <meta name="description" content="Pemesanan Tiket Bioskop">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    
    
 
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
    
</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php?page=home"><img width="100px" height="100px" src="../images/loggorha.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php?page=home"><img height="30px" src="../images/loggorha.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php?page=home"> <i class="menu-icon fa fa-home" height="40%"></i>Dashboard </a>
                    </li>
                   
                    <li>
                        <a href="index.php?page=data-read"> <i class="menu-icon fa fa-table"></i>Rekap Data</a>
                      </li>
                    <li>
                        <a href="index.php?page=aduan-read"> <i class="menu-icon fa fa-user"></i>Aduan Masyarakat</a>
                      </li>
                    <li>
                        <a href="../logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>
                      </li>

                   

                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <h3>Sistem Rapid Health Assesment</h3>

                    </div>
                </div>
                         

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/user.png" alt="">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="../logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    <div class="col-sm-5">
                    <?php 
                        echo $_SESSION['nama'] ;
                    ?>
                    </div>
                    </div>

                </div>
            </div>

        </header>

            <?php

             
                    if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'home':
                            include "home.php";
                            break;
                       
                       
                        case 'data-read':
                            include "../analisator/data/data-read.php";
                            break;
                        
                        case 'data-tambahA':
                            include "../analisator/data/tambah/data-tambahA.php";
                            break;
                        case 'data-tambahA-notif':
                            include "../analisator/data/notif/tambah/data-tambahA-notif.php";
                            break;
                        case 'data-tambahB':
                            include "../analisator/data/tambah/data-tambahB.php";
                            break;
                        case 'data-tambahB-notif':
                            include "../analisator/data/notif/tambah/data-tambahB-notif.php";
                            break;
                        case 'data-tambahC':
                            include "../analisator/data/tambah/data-tambahC.php";
                            break;
                        case 'data-tambahC-notif':
                            include "../analisator/data/notif/tambah/data-tambahC-notif.php";
                            break;
                        case 'data-tambahD':
                            include "../analisator/data/tambah/data-tambahD.php";
                            break;
                        case 'data-tambahD-notif':
                            include "../analisator/data/notif/tambah/data-tambahD-notif.php";
                            break;
                        case 'data-tambahE':
                            include "../analisator/data/tambah/data-tambahE.php";
                            break;
                        case 'data-tambahE-notif':
                            include "../analisator/data/notif/tambah/data-tambahE-notif.php";
                            break;
                        case 'data-tambahF':
                            include "../analisator/data/tambah/data-tambahF.php";
                            break;
                        case 'data-tambahF-notif':
                            include "../analisator/data/notif/tambah/data-tambahF-notif.php";
                            break;
                        case 'data-tambahG':
                            include "../analisator/data/tambah/data-tambahG.php";
                            break;
                        case 'data-tambahG-notif':
                            include "../analisator/data/notif/tambah/data-tambahG-notif.php";
                            break;
                        case 'data-tambahH':
                            include "../analisator/data/tambah/data-tambahH.php";
                            break;
                        case 'data-tambahH-notif':
                            include "../analisator/data/notif/tambah/data-tambahH-notif.php";
                            break;
                        case 'data-tambahI':
                            include "../analisator/data/tambah/data-tambahI.php";
                            break;
                        case 'data-tambahI-notif':
                            include "../analisator/data/notif/tambah/data-tambahI-notif.php";
                            break;
                        case 'data-tambahJ':
                            include "../analisator/data/tambah/data-tambahJ.php";
                            break;
                        case 'data-tambahJ-notif':
                            include "../analisator/data/notif/tambah/data-tambahJ-notif.php";
                            break;
                        case 'data-tambahK':
                            include "../analisator/data/tambah/data-tambahK.php";
                            break;
                        case 'data-tambahK-notif':
                            include "../analisator/data/notif/tambah/data-tambahK-notif.php";
                            break;

                        case 'data-hapus':
                            include "../analisator/data/data-hapus.php";
                            break;
                        case 'data-hapus-notif':
                            include "../analisator/data/notif/data-hapus-notif.php";
                            break;

                        case 'data-view':
                            include "../analisator/data/data-view.php";
                            break;

                        case 'data-editA':
                            include "../analisator/data/edit/data-editA.php";
                            break;
                        case 'data-editA-notif':
                            include "../analisator/data/notif/edit/data-editA-notif.php";
                            break; 
                        case 'data-editB':
                            include "../analisator/data/edit/data-editB.php";
                            break;
                        case 'data-editB-notif':
                            include "../analisator/data/notif/edit/data-editB-notif.php";
                            break; 
                        case 'data-editC':
                            include "../analisator/data/edit/data-editC.php";
                            break;
                        case 'data-editC-notif':
                            include "../analisator/data/notif/edit/data-editC-notif.php";
                            break; 
                        case 'data-editD':
                            include "../analisator/data/edit/data-editD.php";
                            break;
                        case 'data-editD-notif':
                            include "../analisator/data/notif/edit/data-editD-notif.php";
                            break; 
                        case 'data-editE':
                            include "../analisator/data/edit/data-editE.php";
                            break;
                        case 'data-editE-notif':
                            include "../analisator/data/notif/edit/data-editE-notif.php";
                            break; 
                        case 'data-editF':
                            include "../analisator/data/edit/data-editF.php";
                            break;
                        case 'data-editF-notif':
                            include "../analisator/data/notif/edit/data-editF-notif.php";
                            break; 
                        case 'data-editG':
                            include "../analisator/data/edit/data-editG.php";
                            break;
                        case 'data-editG-notif':
                            include "../analisator/data/notif/edit/data-editG-notif.php";
                            break; 
                        case 'data-editH':
                            include "../analisator/data/edit/data-editH.php";
                            break;
                        case 'data-editH-notif':
                            include "../analisator/data/notif/edit/data-editH-notif.php";
                            break; 
                        case 'data-editI':
                            include "../analisator/data/edit/data-editI.php";
                            break;
                        case 'data-editI-notif':
                            include "../analisator/data/notif/edit/data-editI-notif.php";
                            break; 
                        case 'data-editJ':
                            include "../analisator/data/edit/data-editJ.php";
                            break;
                        case 'data-editJ-notif':
                            include "../analisator/data/notif/edit/data-editJ-notif.php";
                            break; 
                        case 'data-editK':
                            include "../analisator/data/edit/data-editK.php";
                            break;
                        case 'data-editK-notif':
                            include "../analisator/data/notif/edit/data-editK-notif.php";
                            break;                         

                       

                        case 'aduan-read':
                            include "../analisator/aduan/aduan-read.php";
                            break;
                        case 'aduan-hapus':
                            include "../analisator/aduan/aduan-hapus.php";
                            break;
                        case 'aduan-hapus-notif':
                            include "../analisator/aduan/notif/aduan-hapus-notif.php";
                            break;
                        case 'aduan-view':
                            include "../analisator/aduan/aduan-view.php";
                            break;
                        
                        
                        default:
                            include "404.php";
                            break;
                    }
                }else{
                    include "home.php";
                }
            ?>

    <!--/div-->

    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="assets/js/bootbox.all.min.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="assets/js/bootbox.locales.min.js"></script>


    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    <script>
        $(document).on("click", "#alertHapus", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Lanjutkan Menghapus?", function(confirmed){
                if (confirmed) {
                    window.location.href = link;
                };
            })
        })
    </script>


</body>
</html>
