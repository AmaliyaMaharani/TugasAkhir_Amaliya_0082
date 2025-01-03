<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Pembelian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Pembelian</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-body">
                <h3 class="card-title">Edit Data Pembelian</h3>
            </div>

            <!-- form start -->
            <form action="<?= base_url('Pembelian/update'); ?>" method="POST">
                <input type="hidden" name="kode_barang" value="<?= $pembelian['kode_barang']; ?>" />

                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" value="<?= $pembelian['kode_barang']; ?>"
                        id="kode_barang" placeholder="Masukkan Kode Barang" required>
                </div>
                <div class="form-group">
                    <label for="no_invoice">No Invoice</label>
                    <input type="text" class="form-control" name="no_invoice" value="<?= $pembelian['no_invoice']; ?>"
                        id="no_invoice" placeholder="Masukkan No Invoice" required>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?= $pembelian['nama_barang']; ?>"
                        id="nama_barang" placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="form-group">
                    <label for="no_barang">No Barang</label>
                    <input type="text" class="form-control" name="no_barang" value="<?= $pembelian['no_barang']; ?>"
                        id="no_barang" placeholder="Masukkan No Barang" required>
                </div>
                <div class="form-group">
                    <label for="nama_toko">Nama Toko</label>
                    <input type="text" class="form-control" name="nama_toko" value="<?= $pembelian['nama_toko']; ?>"
                        id="nama_toko" placeholder="Masukkan Nama Toko">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $pembelian['alamat']; ?>"
                        id="alamat" placeholder="Masukkan Alamat" required>
                </div>
                <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input type="text" class="form-control" name="telp" value="<?= $pembelian['telp']; ?>" id="telp"
                        placeholder="Masukkan Telepon" required>
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control" name="qty" value="<?= $pembelian['qty']; ?>" id="qty"
                        placeholder="Masukkan Qty" required>
                </div>
                <div class="form-group">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" class="form-control" name="harga_satuan"
                        value="<?= $pembelian['harga_satuan']; ?>" id="harga_satuan" placeholder="Masukkan Harga Satuan"
                        required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="<?= $pembelian['jumlah']; ?>"
                        id="jumlah" placeholder="Masukkan Jumlah" required>
                </div>
                <div class="form-group">
                    <label for="ttd">Tanda Tangan</label>
                    <input type="text" class="form-control" name="ttd" value="<?= $pembelian['ttd']; ?>" id="ttd"
                        placeholder="Masukkan Tanda Tangan" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?= $pembelian['tanggal']; ?>"
                        id="tanggal" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </section>
</div>