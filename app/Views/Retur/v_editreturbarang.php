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
                        <li class="breadcrumb-item active">Edit Data Retur Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-body">
                <h3 class="card-title">Edit Data Retur Barang</h3>
            </div>

            <!-- form start -->
            <form action="<?= base_url('ReturBarang/update/' . $returbarang['id_retur']); ?>" method="post">
                <!-- CSRF Protection -->
                <input type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">

                <div class="form-group">
                    <label for="id_retur">ID Retur</label>
                    <input type="text" class="form-control" name="id_retur" value="<?= $returbarang['id_retur']; ?>"
                        id="id_retur" placeholder="Masukkan ID Retur" required>
                </div>
                <div class="form-group">
                    <label for="no_barang">No Barang</label>
                    <input type="text" class="form-control" name="no_barang" value="<?= $returbarang['no_barang']; ?>"
                        id="no_barang" placeholder="Masukkan No Barang" required>
                </div>
                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang"
                        value="<?= $returbarang['kode_barang']; ?>" id="kode_barang" placeholder="Masukkan Kode Barang"
                        required>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang"
                        value="<?= $returbarang['nama_barang']; ?>" id="nama_barang" placeholder="Masukkan Nama Barang"
                        required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?= $returbarang['tanggal']; ?>"
                        id="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control" name="qty" value="<?= $returbarang['qty']; ?>" id="qty"
                        placeholder="Masukkan Qty" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" value="<?= $returbarang['harga']; ?>"
                        id="harga" placeholder="Masukkan Harga" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="<?= $returbarang['jumlah']; ?>"
                        id="jumlah" placeholder="Masukkan Jumlah" required>
                </div>
                <div class="form-group">
                    <label for="nama_toko">Nama Toko</label>
                    <input type="text" class="form-control" name="nama_toko" value="<?= $returbarang['nama_toko']; ?>"
                        id="nama_toko" placeholder="Masukkan Nama Toko">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Toko</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $returbarang['alamat']; ?>"
                        id="alamat" placeholder="Masukkan Alamat" required>
                </div>
                <!-- Tambahkan input untuk ttd -->
                <div class="form-group">
                    <label for="ttd">Tanda Tangan</label>
                    <input type="text" class="form-control" name="ttd" value="<?= $returbarang['ttd']; ?>" id="ttd"
                        placeholder="Masukkan Tanda Tangan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>