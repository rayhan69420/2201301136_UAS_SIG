<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Peta Kantor Bupati</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Dashboard CSS -->
    <style>
        .dashboard_section {
            background-color: #f2f2f2;
            padding: 50px 0;
        }

        .dashboard_content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard_heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .dashboard_heading h2 {
            font-size: 36px;
            color: #333;
        }

        .dashboard_info {
            margin-top: 30px;
        }

        .dashboard_info p {
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <header class="header_section">
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"> </span>
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
                                <a class="nav-link" href="dashboard">Dashboard</a>
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

    <!-- Dashboard content -->
    <section class="dashboard_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="dashboard_content">
                        <div class="dashboard_heading">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="dashboard_info">
                            <p>Selamat datang di dashboard aplikasi pemetaan geografis Kantor Bupati Kalimantan Selatan. Di sini Anda dapat mengelola data, melihat statistik, dan melakukan pengaturan aplikasi.</p>
                            <p>Contoh konten tambahan seperti grafik, tabel, atau panel kontrol dapat ditambahkan di sini sesuai kebutuhan aplikasi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer_section">
        <div class="container">
            <p>&copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a> Distributed By
                <a href="https://themewagon.com">ThemeWagon</a>
            </p>
        </div>
    </section>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>