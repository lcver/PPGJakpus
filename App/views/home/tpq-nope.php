<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPG Jakpus</title>

    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="<?=BASEURL?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .navbar{
            /* background-color: rgb(255,255,255,); */
        }
        .jumbotron-img {
            background-image: url(<?=BASEURL?>dist/img/photo1.png);
            background-size: cover;
        }
        .jumbotron {
            height: 80vh;
            /* border-radius: 0 0 5% 50%; */
        }
    </style>
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?=BASEURL?>dist/img/ppg.png" height="30" width="30" alt="">
                <span class="font-weight-bold">PPG Jakpus</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>">PPGJakpus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>kegiatan">Kegiatan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=BASEURL?>tpq">TPQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-img">
        <div class="container">
        </div>
    </div>

    <div class="container">
        <div class="text-center mb-3">
            <h2 class="border-warning border-bottom" style="border-color: yellow;">TPQ</h2>
        </div>
        <!-- Blog Entries Column -->
        <div class="row">
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
            <div class="col-md-3 text-center my-3">
                <img src="<?=BASEURL?>dist/img/boxed-bg.jpg" class="img-thumbnail m-0 p-0" alt="">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-2 mt-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>
    <script src="<?=BASEURL?>dist/js/jquery/jquery.min.js"></script>
    <script src="<?=BASEURL?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>