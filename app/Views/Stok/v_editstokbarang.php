<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengelolaan Stok Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Stok Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-body">
                <h3 class="card-title">Edit Data Stok Barang</h3>
            </div>

            <!-- form start -->
            <form action="<?= base_url('StokBarang/update/' . $stok_barang['id_stok']); ?>" method="post">
                <!-- CSRF Protection -->
                <input type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">

                <div class="form-group">
                    <label for="id_stok">ID Stok</label>
                    <input type="text" class="form-control" name="id_stok" value="<?= $stok_barang['id_stok']; ?>"
                        id="id_stok" placeholder="Masukkan ID Stok" required>
                </div>
                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang"
                        value="<?= $stok_barang['kode_barang']; ?>" id="kode_barang" placeholder="Masukkan Kode Barang"
                        required>
                </div>
                <div class="form-group">
                    <label for="no_barang">No Barang</label>
                    <input type="text" class="form-control" name="no_barang" value="<?= $stok_barang['no_barang']; ?>"
                        id="no_barang" placeholder="Masukkan No Barang" required>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang"
                        value="<?= $stok_barang['nama_barang']; ?>" id="nama_barang" placeholder="Masukkan Nama Barang"
                        required>
                </div>
                <div class="form-group">
                    <label for="jumlah_awal_barang">Jumlah Awal Barang</label>
                    <input type="number" class="form-control" name="jumlah_awal_barang"
                        value="<?= $stok_barang['jumlah_awal_barang']; ?>" id="jumlah_awal_barang"
                        placeholder="Masukkan Jumlah Awal Barang" required>
                </div>
                <div class="form-group">
                    <label for="kondisi_barang_baik">Kondisi Barang Baik</label>
                    <input type="number" class="form-control" name="kondisi_barang_baik"
                        value="<?= $stok_barang['kondisi_barang_baik']; ?>" id="kondisi_barang_baik"
                        placeholder="Masukkan Kondisi Barang Baik" required>
                </div>
                <div class="form-group">
                    <label for="kurang_baik">Kurang Baik</label>
                    <input type="number" class="form-control" name="kurang_baik"
                        value="<?= $stok_barang['kurang_baik']; ?>" id="kurang_baik"
                        placeholder="Masukkan Jumlah Barang Kurang Baik" required>
                </div>
                <div class="form-group">
                    <label for="total_barang_baik">Total Barang Baik</label>
                    <input type="number" class="form-control" name="total_barang_baik"
                        value="<?= $stok_barang['total_barang_baik']; ?>" id="total_barang_baik"
                        placeholder="Masukkan Total Barang Baik" required>
                </div>
                <div class="form-group">
                    <label for="total_barang_kurang_baik">Total Barang Kurang Baik</label>
                    <input type="number" class="form-control" name="total_barang_kurang_baik"
                        value="<?= $stok_barang['total_barang_kurang_baik']; ?>" id="total_barang_kurang_baik"
                        placeholder="Masukkan Total Barang Kurang Baik" required>
                </div>
                <div class="form-group">
                    <label for="ttd">Tanda Tangan</label>
                    <input type="text" class="form-control" name="ttd" value="<?= $stok_barang['ttd']; ?>" id="ttd"
                        placeholder="Masukkan Tanda Tangan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>