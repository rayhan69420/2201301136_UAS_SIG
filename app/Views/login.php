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
    <link rel="shortcut icon" href="<?= base_url('assets-landing/images/map.png') ?>" type="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-landing/css/bootstrap.css') ?>" />

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets-landing/css/style.css') ?>" rel="stylesheet" />
</head>

<body>

    <body>
        <div class="container">
            <h2>Login</h2>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="<?= base_url('/login/auth') ?>" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <!-- jQuery -->
        <script type="text/javascript" src="<?= base_url('assets-landing/js/jquery-3.4.1.min.js') ?>"></script>
        <!-- Bootstrap JS -->
        <script type="text/javascript" src="<?= base_url('assets-landing/js/bootstrap.js') ?>"></script>
    </body>

</html>