<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="assets-landing/images/map.png" type="">

    <title>Peta</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets-landing/css/bootstrap.css" />

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets-landing/owl.carousel.min.css" />

    <!-- Font awesome style -->
    <link href="assets-landing/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets-landing/css/style.css" rel="stylesheet" />
    <!-- Responsive style -->
    <link href="assets-landing/css/responsive.css" rel="stylesheet" />

    <!-- Custom CSS for adjustments -->
    <style>
        .about_section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .about_section .img-box img {
            max-width: 100%;
            height: auto;
        }

        .map_title {
            text-align: center;
            margin-bottom: 30px;
        }

        #map {
            width: 100%;
            height: 480px;
        }

        .info_section {
            padding-top: 50px;
            padding-bottom: 50px;
        }
    </style>

</head>

<body>
    <div class="hero_area">
        <!-- Header section starts -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="contact_nav">
                    </div>
                </div>
            </div>

            <body>

                <div class="hero_area">
                    <header class="header_section">
                        <div class="header_bottom">
                            <div class="container-fluid">
                                <nav class="navbar navbar-expand-lg custom_nav-container">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class=""> </span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#beranda">Beranda </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="data">Data Kantor Bupati</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </header>

                    <!-- Slider section -->
                    <section class="slider_section">
                        <div class="slider_bg_box">
                            <img src="assets-landing/images/OIP.jpeg" alt="">
                        </div>
                        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="detail-box">
                                                    <h1>
                                                        KALIMANTAN <br>
                                                        SELATAN
                                                    </h1>
                                                    <p>
                                                        Sistem informasi ini merupakan aplikasi pemetaan geografis Kantor Bupati
                                                        di wilayah Kalimantan Selatan. Aplikasi ini memuat informasi dan lokasi dari
                                                        template
                                                        kantor bupati di Kalimantan Selatan.
                                                    </p>
                                                    <div class="btn-box">
                                                        <a href="data" class="btn1">
                                                            Lihat Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- About section -->
                <section class="about_section layout_padding-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-2 mb-4 mb-md-0">
                                <div class="img-box">
                                    <img src="assets-landing/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="detail-box">
                                    <div class="heading_container">
                                        <h2>
                                            About
                                        </h2>
                                    </div>
                                    <p>
                                        Kalimantan Selatan merupakan provinsi di pulau Kalimantan yang memiliki 11 kabupaten dan 2
                                        Kota, luas wilayahnya adalah 38.744,23 Km2 dan memiliki jumlah penduduk 3.922.790 (BPS
                                        2014). Ada beberapa suku bangsa yang mendiami wilayah Kalsel yaitu Suku Banjar, Dayak
                                        Bakumpai, Dayak Baraki, Dayak Maanyan, Dayak Lawangan, Dayak Bukit Ngaju, Melayu Jawa,
                                        Bugis, Cina dan Arab Keturunan. (kemendagri 2015).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Map section -->
                <section class="map_section layout_padding-bottom">
                    <div class="container">
                        <div class="map_title">
                            <h2>
                                Peta Kantor Bupati
                            </h2>
                        </div>
                    </div>
                </section>

                <section>
                    <div id="map" style="width:100%;height:480px;"></div>
                </section>

                <!-- Footer section -->
                <section class="footer_section">
                    <div class="container">
                        <p>
                            &copy; <span id="displayYear"></span> All Rights Reserved By
                            <a href="https://html.design/">Free Html Templates</a>
                            Distributed By
                            <a href="https://themewagon.com">ThemeWagon</a>
                        </p>
                    </div>
                </section>

                <!-- jQuery -->
                <script type="text/javascript" src="assets-landing/js/jquery-3.4.1.min.js"></script>
                <!-- Popper JS -->
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                </script>
                <!-- Bootstrap JS -->
                <script type="text/javascript" src="assets-landing/js/bootstrap.js"></script>
                <!-- Owl slider JS -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                </script>
                <!-- Custom JS -->
                <script type="text/javascript" src="assets-landing/js/custom.js"></script>

                <!-- Google Map -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=initMap" async defer></script>
                <script type="text/javascript">
                    function initMap() {
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 9,
                            center: {
                                lat: -3.31987,
                                lng: 114.59086
                            } // Koordinat pusat peta sesuai kebutuhan
                        });

                        // Data koordinat kantor bupati (contoh, sesuaikan dengan data yang Anda miliki)
                        var kantorBupati = [{
                                nama: 'Kantor Bupati Balangan',
                                lat: -2.363753440793835,
                                lng: 115.47107387333193
                            },
                            {
                                nama: 'Kantor Bupati Banjar',
                                lat: -3.4090290624749042,
                                lng: 114.84820517384628
                            },
                            {
                                nama: 'Kantor Bupati Barito Kuala',
                                lat: -2.9786099610031225,
                                lng: 114.76578712363154
                            },
                            {
                                nama: 'Kantor Bupati Hulu Sungai Selatan',
                                lat: -2.786762821852709,
                                lng: 115.26591696170517
                            },
                            {
                                nama: 'Kantor Bupati Hulu Sungai Tengah',
                                lat: -2.584762076677682,
                                lng: 115.38450287130557
                            },
                            {
                                nama: 'Kantor Bupati Hulu Sungai Utara',
                                lat: -2.419424808502447,
                                lng: 115.25429168342586
                            },
                            {
                                nama: 'Kantor Bupati Kotabaru',
                                lat: -3.2363674844696213,
                                lng: 116.22785530567725
                            },
                            {
                                nama: 'Kantor Bupati Tabalong',
                                lat: -2.164619348403494,
                                lng: 115.38227705276198
                            },
                            {
                                nama: 'Kantor Bupati Tanah Bumbu',
                                lat: -3.4835700305988255,
                                lng: 115.946745654504
                            },
                            {
                                nama: 'Kantor Bupati Tanah Laut',
                                lat: -3.7997368832996057,
                                lng: 114.7826092496624
                            },
                            {
                                nama: 'Kantor Bupati Tapin',
                                lat: -2.9333847466144922,
                                lng: 115.16255667998429
                            },

                        ];

                        // Tambahkan marker untuk setiap kantor bupati
                        for (var i = 0; i < kantorBupati.length; i++) {
                            var marker = new google.maps.Marker({
                                position: {
                                    lat: kantorBupati[i].lat,
                                    lng: kantorBupati[i].lng
                                },
                                map: map,
                                title: kantorBupati[i].nama
                            });
                        }
                    }
                </script>
            </body>

</html>