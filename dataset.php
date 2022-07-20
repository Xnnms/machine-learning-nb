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

    <link rel="stylesheet" href="css/datatables.css">

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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Klasifikasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="dataset.php">Data<span class="sr-only">(current)</span> </a>
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
                <h2 class="tebal">Dataset Iris</h2><br>
                <p class="desc">Dataset Iris merupakan dataset multivariate yang diperkenalkan oleh ahli statistika dan
                    biologi inggris, Ronald Fisher, pada tahun 1936. Dataset bunga Iris ini sangat terkenal di dunia
                    Machine Learning yang digunakan untuk klasifikasi. Dataset ini terdiri dari 3 spesies Iris yaitu
                    Iris
                    Setosa, Iris Virginica, dan Iris Versicolor dan tiap spesiesnya memiliki 50 sampel. Dalam data Iris
                    terdapat 4 atribut yang dapat mempengaruhi klasifikasi yaitu, sepal length, sepal width, petal
                    length, dan petal width dalam centimeter yang berbeda-beda.</p><br>

                <?php
$file = fopen('DATABASE/iris.csv',"r"); //buka file csv
$table = "<table id='dataLatih' class='table table-hover'>";
while(!feof($file)) //cari akhir baris csv
{
  $data = fgetcsv($file,0,','); //baca isi csv perbaris dengan koma
  $table .= "<tr bgcolor='#fff'>";
  for($i=0;$i<count($data);$i++) //looping sejumlah data perbaris
  {
 $table .= "<td>".$data[$i]."</td>";
  }
  $table .= "</tr>";
}
fclose($file); //tutup akses file csv
$table .= "</table>";

//tampilkan tabel
echo $table;
?>
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


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="jspopper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/datatables.js"></script>

    <!-- validasi -->
    <script>
    $(document).ready(function() {
        $('.toggle').click(function() {
            $('ul').toggleClass('active');
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#dataLatih').dataTable({
            "pageLength": 100
        });
    });
    </script>

</body>

</html>