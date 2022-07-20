<?php
require __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\NaiveBayes;
use Phpml\Dataset\CsvDataset;


?>
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

    <title>Klasifikasi Bunga Iris</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Klasifikasi<span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataset.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Informasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style='margin-top:90px'>
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="tebal">Apa itu Naive Bayes?</h2>
                <p class="desc mt-4">Naive Bayes adalah metode yang cocok untuk klasifikasi biner dan multiclass. Metode
                    yang juga dikenal sebagai Naive Bayes Classifier ini menerapkan teknik supervised klasifikasi objek
                    di masa depan dengan menetapkan label kelas ke instance/catatan menggunakan probabilitas bersyarat.
                    Probabilitas bersyarat adalah ukuran peluang suatu peristiwa yang terjadi berdasarkan peristiwa lain
                    yang telah (dengan asumsi, praduga, pernyataan, atau terbukti) terjadi.

                    Istilah supervised merujuk pada klasifikasi training data yang sudah diberi label dengan kelas.
                    Misalnya, sebuah transaksi penipuan telah ditandai sebagai data transaksional. Kemudian, jika Anda
                    ingin mengklasifikasikan transaksi di masa depan menjadi fraudulent/non-fraudulent
                    (penipuan/non-penipuan), maka jenis klasifikasi itu akan disebut sebagai supervised.

                    Nah, model machine learning yang diterapkan pada program tersebut menggunakan teorema Bayes yang
                    dirumuskan sebagai berikut:<br /><br /> </p>
                <h2 class="text-center text-danger  ">
                    P(A│B) = P(B│A)P(A)P(B).<br /><br />


                </h2>
                <p class="desc mt-4 text-danger">
                    Keterangan : <br><br>
                    P(A│B) : Probabilitas A terjadi dengan bukti bahwa B telah terjadi (probabilitas superior) <br>
                    P(B│A) : Probabilitas B terjadi dengan bukti bahwa A telah terjadi <br>
                    P(A) : Peluang terjadinya A <br>
                    P(B) : Peluang terjadinya B</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <h3 class="tebal">Klasifikasi Bunga Iris dengan Naive Bayes</h3>
            </div>

            <div class="col-6">
                <form method="POST" class="mt-3">

                    <div class="form-group">
                        <label for="sepalLength">Sepal Length :</label>
                        <input type="double" class="form-control" id="sepalLength" placeholder="Enter sepalLength"
                            name="sepalLength">
                    </div>
                    <div class="form-group">
                        <label for="sepalWidth">Sepal Width :</label>
                        <input type="double" class="form-control" id="sepalWidth" placeholder="Enter sepalWidth"
                            name="sepalWidth">
                    </div>
                    <div class="form-group">
                        <label for="petalLength">Petal Length :</label>
                        <input type="double" class="form-control" id="petalLength" placeholder="Enter petalLength"
                            name="petalLength">
                    </div>
                    <div class="form-group">
                        <label for="petalWidth">Petal Width :</label>
                        <input type="double" class="form-control" id="petalWidth" placeholder="Enter petalWidth"
                            name="petalWidth">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary mt-3" name="proses" />
                    </div>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div id="hasilSIM" style="margin-bottom:30px;">
                    <?php
        if (isset($_POST['proses'])) {
            $dataset = new CsvDataset('DATABASE/iris.csv', 4, true);
            /*
            data ada 4 parameter dan 1 label
            sepal length, sepal width, petal length, petal width
            label = jenis iris
            */
            $samples = $dataset->getSamples();
            $labels = $dataset->getTargets();

            $dtesting[] = $_POST['sepalLength'];
            $dtesting[] = $_POST['sepalWidth'];
            $dtesting[] = $_POST['petalLength'];
            $dtesting[] = $_POST['petalWidth'];

            $class_hasil = "";
            

            $classifier = new NaiveBayes();
            $classifier->train($samples, $labels);
            $class_hasil = $classifier->predict($dtesting);
            echo "<h2> Menurut data, kondisi tersebut merupakan Iris $class_hasil</h2><br>";
            echo "<img src='img/$class_hasil.jpg' class='img-rounded' alt='' width='500'>";
        }
        ?>
                </div>
            </div>
        </div>

    </div>

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
    <!-- Footer -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="jspopper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- validasi -->

</body>

</html>