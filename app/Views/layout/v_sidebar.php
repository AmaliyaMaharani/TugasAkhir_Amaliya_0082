<aside class="main-sidebar sidebar-dark-primary elevation-4"
    style="height: 100vh; position: fixed; top: 0; bottom: 0; overflow-y: auto;">
    <!-- Logo atau Header Sidebar -->
    <a href="#" class="brand-link" style="background-color: #ffc107; color: black;">
        <span class="brand-text font-weight-bold">SPSM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- Foto Pengguna -->
            <div class="image">
                <img src="<?= base_url(); ?>template/dist/img/avatar2.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <!-- Informasi Pengguna -->
            <div class="info">
                <a href="#" class="d-block text-capitalize"><?= session('username'); ?></a>
                <span class="text-success text-sm">
                    <i class="fas fa-circle"></i> Online
                </span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/Home" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Menu Pengecekan Barang -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/PengecekanBarang" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>Pengecekan Barang</p>
                    </a>
                </li>
                <!-- Menu Pembelian Barang -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/Pembelian" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Pembelian Barang</p>
                    </a>
                </li>
                <!-- Menu Barang Masuk -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/PengelolaanBarang" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Barang Masuk</p>
                    </a>
                </li>
                <!-- Menu Retur Barang -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/ReturBarang" class="nav-link">
                        <i class="nav-icon fas fa-undo"></i>
                        <p>Retur Barang</p>
                    </a>
                </li>
                <!-- Menu Stok Barang -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/StokBarang" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Stok Barang</p>
                    </a>
                </li>
                <!-- Menu Laporan -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/Laporan" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link btn-logout">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
                <script>
                    document.querySelector('.btn-logout').addEventListener('click', function (e) {
                        e.preventDefault(); // Mencegah aksi default tombol
                        Swal.fire({
                            title: 'Apakah Anda yakin?',
                            text: "Anda akan keluar dari sesi ini.",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, logout!',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = this.href;
                            }
                        });
                    });
                </script>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>