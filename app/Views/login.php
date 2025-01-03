<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // SweetAlert untuk pesan sukses
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?= session()->getFlashdata('success') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>

        // SweetAlert untuk pesan error
        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '<?= session()->getFlashdata('error') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    </script>

    <div class="wrapper d-flex justify-content-center align-items-center vh-100">

        <!-- Main content -->
        <div class="card card-primary" style="width: 400px;">
            <div class="card-header text-center">
                <h3 class="card-title">Login</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="loginForm" action="<?= base_url('autentikasi'); ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username"
                            placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter password">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/template/dist/js/adminlte.min.js"></script>
</body>

</html>