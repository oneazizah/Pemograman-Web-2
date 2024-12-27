<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Transaksi</h2>

<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="cul">#</th>
                <th scope="cul">Nama Pelanggan</th>
                <th scope="cul">Tanggal</th>
                <th scope="cul">Total</th>
                <th scope="cul">Status</th>
                <th scope="cul">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>one cantik</td>
                <td>27 Desember 2024 17.16 WIB</td>
                <td>Rp.950.000</td>
                <td>
                    <span class="badge bg-warning">pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn
                    btn-success">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn
                    btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>