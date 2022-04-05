<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/'); ?>">Food & Drink</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
            <a class="nav-link active" href="<?= base_url('/'); ?>">Home</a> <!--Base Url digunakan untuk database, kalo tidak database bisa menggunakan /-->
            <a class="nav-link" href="<?= base_url('/dashboard/category'); ?>">Category</a>
            <a class="nav-link" href="<?= base_url('/dashboard/product'); ?>">Product</a>
      </div>
    </div>
  </div>
</nav>