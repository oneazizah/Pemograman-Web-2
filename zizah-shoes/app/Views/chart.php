<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chart - zizah-shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row bg-primary-subtle mb-2">
            <div class="col-6">
                <h1>KERANJANG BELANJA</h1>
            </div>
        </div>
        <div class="row mb-4 ">
            <div class="col-12 d-flex justify-content-end">
                <a href="chart.php" class="btn btn-secondary">Keranjang Belanja 
                    <span class="badge text-bg-warning">1</span>
            </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5 g-3">
            <div class="col-12">
                <div class="row p-3 bg-danger-subtle g-3">
                    <div class="row">
                    <div class="col-4">
                        <img src="<?= base_url ()?>images/sepatu.jpeg"alt="" style="width: 200px; height: auto">
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center">
                        <span><h5>Adidas</h5></span>
                        <p>950,000,-</p>
                    </div>
                    <div class="col 1 d-flex flex-column justify-content-center">
                        <span>1</span>
                    </div>
                    <div class="col-2 d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row p-3 bg-danger-subtle g-3">
                    <div class="row">
                    <div class="col-4">
                        <img src="<?= base_url ()?>images/sepatu.jpeg"alt="" style="width: 200px; height: auto">
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center">
                        <span><h5>Adidas</h5></span>
                        <p>950,000,-</p>
                    </div>
                    <div class="col 1 d-flex flex-column justify-content-center">
                        <span>1</span>
                    </div>
                    <div class="col-2 d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row p-3 bg-danger-subtle g-3">
                    <div class="row">
                    <div class="col-4">
                        <img src="<?= base_url ()?>images/sepatu.jpeg"alt="" style="width: 200px; height: auto">
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center">
                        <span><h5>Adidas</h5></span>
                        <p>950,000,-</p>
                    </div>
                    <div class="col 1 d-flex flex-column justify-content-center">
                        <span>1</span>
                    </div>
                    <div class="col-2 d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row p-3 bg-danger-subtle g-3">
                    <div class="row">
                    <div class="col-4">
                        <img src="<?= base_url ()?>images/sepatu.jpeg"alt="" style="width: 200px; height: auto">
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center">
                        <span><h5>Adidas</h5></span>
                        <p>950,000,-</p>
                    </div>
                    <div class="col 1 d-flex flex-column justify-content-center">
                        <span>1</span>
                    </div>
                    <div class="col-2 d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row p-3 bg-danger-subtle g-3">
                    <div class="row">
                    <div class="col-4">
                        <img src="<?= base_url ()?>images/sepatu.jpeg"alt="" style="width: 200px; height: auto">
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center">
                        <span><h5>Adidas</h5></span>
                        <p>950,000,-</p>
                    </div>
                    <div class="col 1 d-flex flex-column justify-content-center">
                        <span>1</span>
                    </div>
                    <div class="col-2 d-flex flex-column justify-content-center">
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-end mb-5">
            <div class= "">
                <h2>TOTAL: 950.000</h2>
                </div>
                <div class="row d-flex">
                    <div class="col-12">
                    <a href="<?= base_url()?>" class="btn btn-secondary">Kembali Berbelanja</a>
                    <a href="<?= base_url('checkout')?>" class="btn btn-primary">Checkout</a>
                    </div>
                </div> 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>