<?= $this->extend('template') ?>

<?= $this->section('main') ?>


<div class="container p-5 bg-danger-subtle rounded-bottom-4">
  <h1>Selamat Datang di toko buku online</h1>
  <h5>kami menyediakan berbagai jenis buku dari penerbit terpercaya.</h5>
  <a href="<?= base_url() ?>" class="btn btn-primary">lihat produk</a>
</div>

<div class="container">

  <h2 class="mt-5">Buku Best Seller</h2>
  <div class="row gy-5">
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/1.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dunia Sophie</h5>
          <p class="card-text">Rp 80.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/222.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Si Anak Pinter - TERELIYE</h5>
          <p class="card-text">Rp 95.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/333.webp') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">KEDAMAIAN</h5>
          <p class="card-text">Rp 65.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/444.webp') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jejak Cinta yang tersembunyi</h5>
          <p class="card-text">Rp 60.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/5555.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Perahu Kertas</h5>
          <p class="card-text">Rp 97.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/6666.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Love in the fast lane</h5>
          <p class="card-text">Rp 70.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div>
    </div>
    <div class="col-3">
      <div class="card">
        <img src="<?= base_url('images/777.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Menanti restu langit</h5>
          <p class="card-text">Rp 75.000</p>
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>

        </div> 
      </div>
    </div>

  </div>
  <?= $this->endSection() ?>