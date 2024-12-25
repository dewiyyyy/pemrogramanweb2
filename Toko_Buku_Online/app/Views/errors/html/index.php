<?=$this->extend('template')?>
<?= $this->section('main')?>

    <div class ="container p-5 bg-danger-subtle rounded-bottom-4">
        <h1>Selamat Datang di Toko Buku Online</h1>
        <h5>Kami Menyediakan berbagai jenis buku dari penerbit terpercaya.</h5>
        <a href="<?=base_url()?>" class="btn btn-primary">Lihat Produk</a>
</div>

<div class="container mb-5">
    <h2 class="mt-5">Buku Best Seller</h2>
    <div class="row">
        <div class="col-3">
          <div class= "row gy-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url('images/img 1.jpg')?>" class="card-img-top"
            alt="...">
            <div class="card-body">
              <h5 class="card-title">Filosofi Teras</h5>
              <p class="card-text">Rp 85.000</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
          <div class= "row gy-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url('images/img 1.jpg')?>" class="card-img-top"
            alt="...">
            <div class="card-body">
              <h5 class="card-title">Filosofi Teras</h5>
              <p class="card-text">Rp 85.000</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
          <div class= "row gy-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url('images/img 1.jpg')?>" class="card-img-top"
            alt="...">
            <div class="card-body">
              <h5 class="card-title">Filosofi Teras</h5>
              <p class="card-text">Rp 85.000</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
</div>
<?= $this->endSection()?>