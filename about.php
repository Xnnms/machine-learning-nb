<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- font awsome -->
    <link rel="stylesheet" href="css/fontawesome.css" />
    <link rel="stylesheet" href="css/brands.css" />
    <link rel="stylesheet" href="css/solid.css" />

    <link rel="stylesheet" href="css/gaya.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

    <title>Prediksi Naive Bayes V.1</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/icon.png" alt="" width=50 height=50>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Prediksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_simulasi.php">Data</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">Informasi<span class="sr-only">(current)</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style='margin-top:90px'>
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="tebal">Tentang Website</h2><br>
                <p class="desc">
                    Dalam rangka menyelesaikan mata kuliah machine learning ini kami membuat website klasifikasi bunga
                    iris berdasakan kondisi yang dimasukan, jika kondisi tersebut sesuai dengan kondisi yang ada pada
                    dataset, maka akan ditampilkan output spesies mana yang sesuai<br /><br />

                <h3>TOOLS YANG DIGUNAKAN</h3>
                1. Bootstrap 4.0<br />
                2. Font-awesome<br />
                3. Dataset Iris<br /><br>
                </p>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="py-5 team4">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7 text-center">
                        <h2 class="mb-3">ANGGOTA KELOMPOK</h2>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- column  -->
                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="img/epul.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Muchammad Saefulloh</h5>
                                    <h6 class="subtitle mb-3">17201001</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                    <!-- column  -->
                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="img/jefri.jpg" alt="" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Muhammad Ilham</h5>
                                    <h6 class="subtitle mb-3">17200024</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                    <!-- column  -->
                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="img/bobi.jpeg" alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Silvester Bobby</h5>
                                    <h6 class="subtitle mb-3">17201004</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->

                    <!-- Row -->
                </div>
            </div>
        </div>
    </div>


    </div><!-- end container -->

    <!-- Footer -->
    <footer class="page-footer font-small abu1 mt-5">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">

                    <div class="text-center">
                        Sulaxana Boys
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 abu2">©<?php echo date('Y'); ?> <a
                href="https://ars.ac.id/">Machine Learning</a>
        </div>
        <!-- Copyright -->

    </footer>

    <script src="js/jquery.js"></script>

    <!-- validasi -->
    <script>
    $(document).ready(function() {
        $('.toggle').click(function() {
            $('ul').toggleClass('active');
        });
    });
    </script>
</body>

</html>