<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengelolaan Barang Masuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>/Home">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Barang Masuk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-body">
                <h3 class="card-title">Tambah Data Barang Masuk</h3>
            </div>

            <!-- form start -->
            <form action="<?= base_url('PengelolaanBarang/update/' . $barang['no_barang']); ?>" method="post">
                <!-- CSRF Protection -->
                <input type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">

                <div class="form-group">
                    <label for="no_barang">No Barang</label>
                    <input type="text" class="form-control" name="no_barang" value="<?= $barang['no_barang']; ?>"
                        id="no_barang" placeholder="Masukkan No Barang" required>
                </div>
                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" value="<?= $barang['kode_barang']; ?>"
                        id="kode_barang" placeholder="Masukkan Kode Barang" required>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?= $barang['nama_barang']; ?>"
                        id="nama_barang" placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?= $barang['tanggal']; ?>"
                        id="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control" name="qty" value="<?= $barang['qty']; ?>" id="qty"
                        placeholder="Masukkan Qty" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" value="<?= $barang['harga']; ?>" id="harga"
                        placeholder="Masukkan Harga" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="<?= $barang['jumlah']; ?>"
                        id="jumlah" placeholder="Masukkan Jumlah" required>
                </div>
                <!-- Tambahkan input untuk ttd -->
                <div class="form-group">
                    <label for="ttd">Tanda Tangan</label>
                    <input type="text" class="form-control" name="ttd" value="<?= $barang['ttd']; ?>" id="ttd"
                        placeholder="Masukkan Tanda Tangan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                
            </form>
        </div>
    </section>
</div>