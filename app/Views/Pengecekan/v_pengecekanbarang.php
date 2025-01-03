<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengecekan Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Pengecekan Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pengecekan Barang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Form Pencarian -->
                <form action="" method="get" class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="entries">Show entries:</label>
                            <select name="per_page" id="entries" class="form-control d-inline-block w-auto"
                                onchange="this.form.submit()">
                                <option value="5" <?= ($perPage == 5) ? 'selected' : '' ?>>5</option>
                                <option value="10" <?= ($perPage == 10) ? 'selected' : '' ?>>10</option>
                                <option value="25" <?= ($perPage == 25) ? 'selected' : '' ?>>25</option>
                                <option value="50" <?= ($perPage == 50) ? 'selected' : '' ?>>50</option>
                            </select>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Cari barang..."
                                    value="<?= esc($keyword) ?>">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Tabel Data Barang -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Barang</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($barang)): ?>
                            <?php $no = 1 + ($currentPage - 1) * $perPage; ?>
                            <?php foreach ($barang as $item): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($item['no_barang']) ?></td>
                                    <td><?= esc($item['kode_barang']) ?></td>
                                    <td><?= esc($item['nama_barang']) ?></td>
                                    <td><?= esc($item['jumlah_barang']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

                <!-- Informasi Jumlah Data -->
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        Showing <?= $start ?> to <?= $end ?> of <?= $total ?> entries
                    </div>
                    <div>
                        <?= $pager->links() ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Tambahkan Library DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example1').DataTable({
            "paging": true,              // Menampilkan pagination (Previous/Next)
            "lengthChange": true,        // Menampilkan pilihan "Show entries"
            "searching": true,           // Menampilkan kolom pencarian
            "ordering": true,            // Menyortir kolom
            "info": true,                // Menampilkan informasi "Showing 1 of 1 entries"
            "autoWidth": false,          // Menyesuaikan lebar kolom secara otomatis
            "language": {
                "lengthMenu": "Show _MENU_ entries", // Menampilkan teks "Show entries"
                "info": "Showing _START_ to _END_ of _TOTAL_ entries", // Menampilkan informasi
                "infoEmpty": "No entries available", // Ketika tidak ada data
                "infoFiltered": "(filtered from _MAX_ total entries)", // Menampilkan informasi jumlah total setelah difilter
                "search": "Search:", // Menampilkan teks untuk kolom pencarian
                "paginate": {
                    "previous": "Previous", // Teks untuk tombol Previous
                    "next": "Next"          // Teks untuk tombol Next
                }
            }
        });
    });
</script>