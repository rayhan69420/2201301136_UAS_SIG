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
    <link rel="shortcut icon" href="<?= base_url() ?>/assets-landing/images/map.png" type="">

    <title>Peta</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <style>
        /* Style untuk peta */
        #map {
            height: 400px;
            width: 100%;
        }

        /* Style tambahan jika diperlukan */
        .panel-info {
            margin-top: 20px;
        }

        .panel-heading {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }

        .panel-title {
            font-size: 20px;
            margin-top: 0;
        }

        .panel-body {
            padding: 20px;
        }

        .centered {
            text-align: center;
        }
    </style>
    <style>
        /* Custom CSS untuk halaman detail informasi */
        .hero_area {
            background: #f7f7f7;
        }

        .header_section {
            background: #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .header_bottom {
            padding: 15px 0;
        }

        .about-banner {
            background: url('assets-landing/images/OIP.jpeg') center center/cover no-repeat;
            height: 300px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-banner h1 {
            color: #fff;
            font-size: 36px;
            font-weight: 700;
            text-align: center;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .about-info-area {
            padding: 60px 0;
        }

        .about-info-area .panel-info {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .about-info-area .panel-heading {
            background-color: #f9f9f9;
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .about-info-area .panel-title {
            font-size: 24px;
            margin-bottom: 0;
        }

        .about-info-area .panel-body {
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="contact_nav"></div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('index') ?>">Beranda</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url('data') ?>">Data Kantor Bupati</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Banner section -->
        <section class="about-banner relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Detail Informasi Geografis Kantor Bupati
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start about-info area -->
        <section class="about-info-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="panel panel-info">
                            <div class="panel-heading centered">
                                <h2 class="panel-title"><strong>Informasi Kantor Bupati</strong></h2>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>Nama Kantor</th>
                                        <td><?= $kantor['nama_kantor'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $kantor['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td><?= $kantor['no_telpon'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= $kantor['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td><?= $kantor['deskripsi'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-info">
                            <div class="panel-heading centered">
                                <h2 class="panel-title"><strong>Lokasi</strong></h2>
                            </div>
                            <div class="panel-body">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about-info area -->
    </div>

    <!-- Include Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=initMap" async defer></script>

    <script>
        // Function to initialize the map
        function initMap() {
            // Data koordinat dari PHP atau dari database
            var lat = <?= $kantor['lat'] ?>;
            var long = <?= $kantor['long'] ?>;
            var location = {
                lat: parseFloat(lat),
                lng: parseFloat(long)
            };

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 15 // Sesuaikan zoom level sesuai kebutuhan
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: location,
                title: '<?= $kantor['nama_kantor'] ?>' // Judul marker
            });
        }
    </script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="<?= base_url('assets-landing/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets-landing/js/bootstrap.js') ?>"></script>
</body>

</html>