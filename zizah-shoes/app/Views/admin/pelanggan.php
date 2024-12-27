<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">no hp</th>
                <th scope="col">alamat</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">one azizah</th>
                <th scope="row">085366435805</th>
                <th scope="row">pamenang</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>