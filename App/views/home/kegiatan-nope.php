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
        .img-mycustom {
            max-height: 200px;
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
                    <li class="nav-item active">
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

    <div class="container-fluid">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <div class="card border-0 my-4">
                    <div class="card-body">
                        <h5 class="pb-1 mb-3 border-warning border-bottom" style="border-color: yellow;">Festival Anak Sholeh</h5>
                        <div class="col-md-12">
                            <div class="row">
                                <img src="<?=BASEURL?>dist/img/photo2.png" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <img src="<?=BASEURL?>dist/img/photo3.jpg" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <img src="<?=BASEURL?>dist/img/photo4.jpg" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <div class="col-md-3 rounded text-center">
                                    <button class="btn btn-primary my-5">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 my-4">
                    <div class="card-body">
                        <h5 class="pb-1 mb-3 border-warning border-bottom" style="border-color: yellow;">Bimbingan dan Konseling Orang Tua</h5>
                        <div class="col-md-12">
                            <div class="row">
                                <img src="<?=BASEURL?>dist/img/photo2.png" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <img src="<?=BASEURL?>dist/img/photo3.jpg" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <img src="<?=BASEURL?>dist/img/photo4.jpg" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <div class="col-md-3 rounded text-center">
                                    <button class="btn btn-primary my-5">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 my-4">
                    <div class="card-body">
                        <h5 class="pb-1 mb-3 border-warning border-bottom" style="border-color: yellow;">Pengajian Rutin Muda-Mudi</h5>
                        <div class="col-md-12">
                            <div class="row">
                                <img src="<?=BASEURL?>dist/img/photo2.png" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <img src="<?=BASEURL?>dist/img/photo3.jpg" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <img src="<?=BASEURL?>dist/img/photo4.jpg" class="img-thumbnail m-0 p-0  col-md-3 img-mycustom" alt="">
                                <div class="col-md-3 rounded text-center">
                                    <button class="btn btn-primary my-5">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Tahun</h5>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">2020</a>
                            </li>
                            <li>
                                <a href="#">2019</a>
                            </li>
                            <li>
                                <a href="#">2018</a>
                            </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">2017</a>
                            </li>
                            <li>
                                <a href="#">2015</a>
                            </li>
                            <li>
                                <a href="#">2014</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, amet eos. Facere suscipit maiores commodi omnis excepturi perspiciatis similique, cum fuga voluptates unde dignissimos! Illum sit quam optio laborum deleniti.
                    </div>
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