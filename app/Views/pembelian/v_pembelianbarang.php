<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pembelian Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pembelian Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>No Invoice</th>
                            <th>Nama Barang</th>
                            <th>No Barang</th>
                            <th>Nama Toko</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>QTY</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>TTD</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pembelian as $key => $data): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['kode_barang']); ?></td>
                                <td><?= htmlspecialchars($data['no_invoice']); ?></td>
                                <td><?= htmlspecialchars($data['nama_barang']); ?></td>
                                <td><?= htmlspecialchars($data['no_barang']); ?></td>
                                <td><?= htmlspecialchars($data['nama_toko']); ?></td>
                                <td><?= htmlspecialchars($data['alamat']); ?></td>
                                <td><?= htmlspecialchars($data['telp']); ?></td>
                                <td><?= htmlspecialchars($data['qty']); ?></td>
                                <td><?= htmlspecialchars($data['harga_satuan']); ?></td>
                                <td><?= htmlspecialchars($data['jumlah']); ?></td>
                                <td>
                                    <img src="<?= base_url('ttd/' . $data['ttd']); ?>" width="100" alt="TTD Image">
                                </td>
                                <td><?= htmlspecialchars($data['tanggal']); ?></td>
                                <td>

                                    <a href="<?= site_url('Pembelian/edit/' . $data['kode_barang']) ?>">
                                        <!-- FontAwesome edit icon -->
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?= site_url('Pembelian/delete/' . $data['no_barang']) ?>" class="btn btn-danger btn-xs">
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