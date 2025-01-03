<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PENGADAAN BARANG SPAREPART</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('template/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href='<?= base_url('template/dist/css/adminlte.min.css'); ?>'>
</head>

<body class="hold-transition sidebar-mini">
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