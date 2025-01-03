<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Stok Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Stok Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Stok Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Stok</th>
                            <th>Kode Barang</th>
                            <th>No Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Awal Barang</th>
                            <th>Kondisi Barang Baik</th>
                            <th>Kondisi Barang Kurang Baik</th>
                            <th>Total Barang Baik</th>
                            <th>Total Barang Kurang Baik</th>
                            <th>Tanda Tangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($stok_barang as $key => $data): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['id_stok']); ?></td>
                                <td><?= htmlspecialchars($data['kode_barang']); ?></td>
                                <td><?= htmlspecialchars($data['no_barang']); ?></td>
                                <td><?= htmlspecialchars($data['nama_barang']); ?></td>
                                <td><?= htmlspecialchars($data['jumlah_awal_barang']); ?></td>
                                <td><?= htmlspecialchars($data['kondisi_barang_baik']); ?></td>
                                <td><?= htmlspecialchars($data['kurang_baik']); ?></td>
                                <td><?= htmlspecialchars($data['total_barang_baik']); ?></td>
                                <td><?= htmlspecialchars($data['total_barang_kurang_baik']); ?></td>
                                <td>
                                    <img src="<?= base_url('ttd/' . $data['ttd']); ?>" width="100" alt="TTD Image">
                                </td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="<?= site_url('StokBarang/edit/' . $data['id_stok']) ?>"
                                        class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </td>
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