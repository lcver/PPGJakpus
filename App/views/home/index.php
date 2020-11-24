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
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=BASEURL?>">PPGJakpus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>kegiatan">Kegiatan</a>
                    </li>
                    <li class="nav-item">
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

        <!-- Blog Entries Column -->
        <div class="col-md-12 my-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="col-md-5 mx-auto text-center border-warning border-bottom" style="border-color: yellow;">
                        <h2>PPG Jakarta Pusat</h2>
                    </div>
                    <div class="py-5">
                        <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt dolor eum laborum. Amet, quidem, modi ipsum magnam unde aut aperiam illum nulla quia tenetur architecto porro quis et aliquid ducimus.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 my-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="col-md-5 mx-auto text-center border-warning border-bottom" style="border-color: yellow;">
                        <h2>Struktur Organisasi</h2>
                    </div>
                    <div class="py-5">
                        <div class="row">
                            <div class="card border-0 col-md-3">
                                <div class="card-body text-center">
                                    <img src="<?=BASEURL?>dist/img/user1-128x128.jpg" class="img-thumbnail rounded-circle m-0 p-0" alt="">
                                    <p class="font-weight-bold">Jhon Doe</p>
                                </div>
                            </div>
                            <div class="card border-0 col-md-3">
                                <div class="card-body text-center">
                                    <img src="<?=BASEURL?>dist/img/user3-128x128.jpg" class="img-thumbnail rounded-circle m-0 p-0" alt="">
                                    <p class="font-weight-bold">Jhon Doe</p>
                                </div>
                            </div>
                            <div class="card border-0 col-md-3">
                                <div class="card-body text-center">
                                    <img src="<?=BASEURL?>dist/img/user4-128x128.jpg" class="img-thumbnail rounded-circle m-0 p-0" alt="">
                                    <p class="font-weight-bold">Jhon Doe</p>
                                </div>
                            </div>
                            <div class="card border-0 col-md-3">
                                <div class="card-body text-center">
                                    <img src="<?=BASEURL?>dist/img/user5-128x128.jpg" class="img-thumbnail rounded-circle m-0 p-0" alt="">
                                    <p class="font-weight-bold">Jhon Doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 my-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="col-md-5 mx-auto text-center border-warning border-bottom" style="border-color: yellow;">
                        <h2>Lain lain</h2>
                    </div>
                    <div class="py-5"></div>
                </div>
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