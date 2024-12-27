<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah Produk</h2>

<div class="w-50">
    <form action="<?= base_url('admin/koleksi-produk/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk">
        </div>
        <div class="mb-3">
            <label for="brand">merek</label>
            <input type="text" class="form-control" name="merek" id="merek">
        </div>
        <div class="mb-3">
            <label for="kategori">harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <label for="katalog">ukuran</label>
            <input type="file" class="form-control" name="ukuran" id="ukuran" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">warna</label>
            <input type="text" class="form-control" name="warna" id="warna">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/koleksi-produk')?>" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection();?>