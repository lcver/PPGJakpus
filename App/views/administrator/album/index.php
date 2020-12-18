<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator | PPG Jakpus</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL ?>vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
    <div class="wrapper">
        <?= $section['cpanel']['navbar'] ?>
        <?= $section['cpanel']['sidebar'] ?>

        <div class="content-wrapper">
            <div class="container">
                <div class="col-md-12">
                    <button class="btn btn-primary">Upload Foto</button>
                </div>

                <div class="col-md-12">
                    <h4>Album</h4>
                    <div class="row flex-row flex-nowrap" style="overflow-x: scroll">
                    <?php for ($i=0; $i < 15 ; $i++) :?>
                        <div class="col-3 mx-2 bg-dark" style="height:170px;"></div>
                    <?php endfor; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4>Semua Foto</h4>
                    <div class="row">
                    <?php for ($i=0; $i < 100 ; $i++) :?>
                        <div class="m-1 bg-dark" style="width:100px;height:100px;"></div>
                    <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>

        <?= $section['cpanel']['footer'] ?>
    </div>

    <!-- jQuery -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- overlayScrollbars -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASEURL ?>vendor/almasaeed2010/adminlte/dist/js/adminlte.js"></script>
</body>
</html>