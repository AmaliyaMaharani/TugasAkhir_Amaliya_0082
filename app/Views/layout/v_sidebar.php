<aside class="main-sidebar sidebar-dark-primary elevation-4">
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
                <a href="#" class="d-block">Pemilik</a>
                <span class="text-success text-sm">
                    <i class="fas fa-circle"></i> Online
                </span>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="<?= base_url(''); ?>/" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Menu Pengecekan Barang -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Pengecekan Barang</p>
                </a>
            </li>

            <!-- Menu Pembelian Barang -->
            <li class="nav-item">
                <a href="<?= base_url(''); ?>/Pembelian" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>Pembelian Barang</p>
                </a>
            </li>

            <!-- Menu Barang Masuk -->
            <li class="nav-item">
                <a href="<?= base_url(''); ?>/PengelolaanBarang" class="nav-link">
                    <i class="nav-icon fas fa-box"></i>
                    <p>Barang Masuk</p>
                </a>
            </li>


            <!-- Menu Retur Barang -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-undo"></i>
                    <p>Retur Barang</p>
                </a>
            </li>

            <!-- Menu Stok Barang -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>Stok Barang</p>
                </a>
            </li>

            <!-- Menu Laporan -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Laporan</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>