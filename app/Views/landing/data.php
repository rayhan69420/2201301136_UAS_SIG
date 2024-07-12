<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?= base_url('assets-landing-landing/images/map.png') ?>" type="">
    <title>Data Kantor Bupati</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-landing/css/bootstrap.css') ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets-landing/owl.carousel.min.css" />
    <link href="<?= base_url('assets-landing/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets-landing/css/style.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets-landing/css/responsive.css') ?>" rel="stylesheet" />
    <style>
        .table-container {
            display: flex;
            justify-content: center;
        }

        .slider_bg_box {
            position: relative;
            text-align: center;
        }

        .slider_bg_box img {
            display: block;
            width: 100%;
            height: auto;
        }

        .slider-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            /* warna teks */
            text-align: center;
            width: 100%;
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

        <section class="slider_section">
            <div class="slider_bg_box">
                <img src="<?= base_url('assets-landing/images/OIP.jpeg') ?>" alt="">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail-box text-center">
                                    <h1>Data Kantor Bupati</h1>
                                    <p>Halaman ini memuat informasi tempat kantor bupati di Kalimantan Selatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-info-area section-gap">
            <div class="container">
                <div class="panel panel-info panel-dashboard">
                    <div class="panel-body">
                        <div class="table-container text-center">
                            <table class="table table-bordered table-striped table-admin">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kantor</th>
                                        <th>Alamat</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($kantor) > 0) : ?>
                                        <?php foreach ($kantor as $row) : ?>
                                            <tr>
                                                <td><?= $row["id"] ?></td>
                                                <td><?= $row["nama_kantor"] ?></td>
                                                <td><?= $row["alamat"] ?></td>
                                                <td><?= $row["deskripsi"] ?></td>
                                                <td><a href="<?= base_url('kantorbupati/detail/' . $row["id"]) ?>" class="btn btn-primary">Detail dan Lokasi</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5">No data found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>
    <script src="<?= base_url('assets-landing/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets-landing/js/bootstrap.js') ?>"></script>
</body>

</html>