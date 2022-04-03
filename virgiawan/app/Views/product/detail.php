<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container px-3 py-5 my-5">
    <!-- product -->
    <section class="row mb-5" id="product">
        <div class="col-12 mb-3">
            <h2><?= $title; ?></h2>
        </div>
        <div class="col-12 mb-3">
            <?php if (session()->getFlashdata('message')) { ?>
                <div div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= $product->thumbnail; ?>" class="product-thumbnail-detail rounded-start" alt="><?= $product->name; ?>">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title"><?= $product->name; ?></h3>
                            <h2><span class="fw-bold"><?= $product->price; ?></span> IDR</h2>
                            <p class="card-text">
                                <a href="/category/<?= $product->id_category; ?>" class="btn btn-sm btn-outline-dark border"><?= $product->c_name; ?></a>
                            </p>
                            <p class="card-text">
                                <a href="edit/<?= $product->id; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete/<?= $product->id; ?>" class="btn btn-danger" onclick="return confirm(`Are you sure delete '<?= $product->name; ?>'?`)">Delete</a>
                            </p>
                            <p class="card-text">
                                <a href="./" class="nav-link px-0">&larr; Kembali</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>