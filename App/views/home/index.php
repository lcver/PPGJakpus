<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Home | PPG Jakpus</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <?= $section['page']['navbar'] ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?= $section['page']['header'] ?>
            <!-- Main content -->
            <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-8">
                    <div class="card bg-transparent shadow-none">
                    <div class="card-header border-dark">
                        <h5 class="card-title">PPG Jakpus</h5>
                    </div>
                    <div class="card-body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo eveniet voluptates consectetur explicabo commodi tempora doloribus neque corrupti, deserunt odit ea laborum perferendis quos, mollitia quisquam? Odit, et. Quo, dolor?
                    </div>
                    </div>
                    <div class="card bg-transparent shadow-none">
                    <div class="card-header border-dark">
                        <h5 class="card-title">Struktur Organisasi</h5>
                    </div>
                    <div class="card-body d-block text-center">
                        <img src="<?= BASEURL ?>vendor\almasaeed2010\adminlte\dist\img\avatar.png" class="img-thumbnail p-0 img-circle col-md-2 col-sm-12 mb-3" style="max-width:150px">
                        <img src="<?= BASEURL ?>vendor\almasaeed2010\adminlte\dist\img\avatar2.png" class="img-thumbnail p-0 img-circle col-md-2 col-sm-12 mb-3" style="max-width:150px">
                        <img src="<?= BASEURL ?>vendor\almasaeed2010\adminlte\dist\img\avatar3.png" class="img-thumbnail p-0 img-circle col-md-2 col-sm-12 mb-3" style="max-width:150px">
                        <img src="<?= BASEURL ?>vendor\almasaeed2010\adminlte\dist\img\avatar04.png" class="img-thumbnail p-0 img-circle col-md-2 col-sm-12 mb-3" style="max-width:150px">
                        <img src="<?= BASEURL ?>vendor\almasaeed2010\adminlte\dist\img\avatar5.png" class="img-thumbnail p-0 img-circle col-md-2 col-sm-12 mb-3" style="max-width:150px">
                    </div>
                    </div>
                    <div class="card bg-transparent shadow-none">
                    <div class="card-header border-dark">
                        <h5 class="card-title">Lain lain</h5>
                    </div>
                    <div class="card-body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo eveniet voluptates consectetur explicabo commodi tempora doloribus neque corrupti, deserunt odit ea laborum perferendis quos, mollitia quisquam? Odit, et. Quo, dolor?
                    </div>
                    </div>
                </div>
                <?= $section['page']['sidebar'] ?>            
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?= $section['page']['footer'] ?>

    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
