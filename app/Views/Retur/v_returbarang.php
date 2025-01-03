<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengelolaan Retur Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Pengelolaan Retur Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Retur Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="<?= base_url('ReturBarang/add_data'); ?>" class="btn btn-primary mb-3">+</a>
                <?php
                if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                    <?php
                }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Retur</th>
                            <th>Nomor Barang</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Nama Toko</th>
                            <th>Alamat</th>
                            <th>TTD</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($returbarang as $key => $data): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['id_retur']); ?></td>
                                <td><?= htmlspecialchars($data['no_barang']); ?></td>
                                <td><?= htmlspecialchars($data['kode_barang']); ?></td>
                                <td><?= htmlspecialchars($data['nama_barang']); ?></td>
                                <td><?= htmlspecialchars($data['tanggal']); ?></td>
                                <td><?= htmlspecialchars($data['qty']); ?></td>
                                <td><?= htmlspecialchars($data['harga']); ?></td>
                                <td><?= htmlspecialchars($data['jumlah']); ?></td>
                                <td><?= htmlspecialchars($data['nama_toko']); ?></td>
                                <td><?= htmlspecialchars($data['alamat']); ?></td>
                                <td>
                                    <img src="<?= base_url('ttd/' . $data['ttd']); ?>" width="100" alt="TTD Image">
                                </td>
                                <td>
                                    <a href="<?= base_url('ReturBarang/edit/' . $data['id_retur']) ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('ReturBarang/delete/' . $data['id_retur']) ?>"
                                        class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
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