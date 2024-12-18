<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Regis</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('template/') ?>assets/img/favicon.jpg">

    <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('template/') ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url('template/') ?>assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/style.css">
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo">
                            <img src="<?= base_url('template') ?>/assets/img/blu.png" alt="" style="width: 100px; height: auto;">
                        </div>
                        <div class="login-userheading">
                            <h3>Buat Akun</h3>
                        </div>
                        <form action="<?= base_url('registrasi/tambah'); ?>" method="post" class="form-login">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="pass-input form-control" placeholder="Masukkan Password" required>
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-login">Sign Up</button>
                            </div>
                            <h4>Already a user? <a href="<?= base_url('log')?>" class="hover-a">Sign In</a></h4>
                        </form>
                    </div>
                </div>
                <div class="login-img">
                    <img src="<?= base_url('template/') ?>assets/img/login.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('template/') ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('template/') ?>assets/js/feather.min.js"></script>
    <script src="<?= base_url('template/') ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('template/') ?>assets/js/script.js"></script>
</body>

</html>
