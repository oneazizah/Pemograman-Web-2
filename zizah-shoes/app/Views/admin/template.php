<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin zizah shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?> css/style.css">
  </head>
  
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Admin</h2>
            </div>
            <div class="col">
                <a href="<?= base_url('logout')?>" class="btn
                btn-secondary">log out</a>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <ul>
                    <li>
                        <a href="<?= base_url('admin/dashboard')?>"class="">Dashboard</a>
                    </li>
                    <li>
                        <a href="<?=base_url('admin/daftar-produk')?>" class="">Daftar-produk</a>
                    </li>
                    <li>
                        <a href="<?=base_url('admin/transaksi')?>" class="">transaksi</a>
                    </li>
                    <li>
                        <a href="<?=base_url('admin/pelanggan')?>" class="">Pelanggan</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <?= $this->renderSection('main'); ?>
            </div>
        </div>
    </div>
    <footer class="bg-succes text text-white py-3 text">
        <div class="container">
            Coopyright 2024,  zizah shoes, All right reserved
        </div>
    </footer>
    <?= $this->renderSection('main') ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>