<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Laporan Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Laporan</th>
                            <th>Kode Barang</th>
                            <th>No Barang</th>
                            <th>ID Stok</th>
                            <th>ID Kondisi</th>
                            <th>Nama Barang</th>
                            <th>Stok Awal</th>
                            <th>Stok Masuk</th>
                            <th>Stok Keluar</th>
                            <th>Jumlah Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($laporan as $data): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['kode_laporan']); ?></td>
                                <td><?= htmlspecialchars($data['kode_barang']); ?></td>
                                <td><?= htmlspecialchars($data['no_barang']); ?></td>
                                <td><?= htmlspecialchars($data['id_stok']); ?></td>
                                <td><?= htmlspecialchars($data['id_kondisi']); ?></td>
                                <td><?= htmlspecialchars($data['nama_barang']); ?></td>
                                <td><?= htmlspecialchars($data['stok_awal']); ?></td>
                                <td><?= htmlspecialchars($data['stok_masuk']); ?></td>
                                <td><?= htmlspecialchars($data['stok_keluar']); ?></td>
                                <td><?= htmlspecialchars($data['jumlah_barang']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->