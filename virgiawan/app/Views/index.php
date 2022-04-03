<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container px-3 py-5 my-5">
    <!-- category -->
    <section class="row mb-5" id="category">
        <div class="col-12 mb-3">
            <h2>Category</h2>
        </div>
        <?php foreach ($category as $c) { ?>
            <div class="col-4 col-lg-2 mb-4 mb-lg-3">
                <a href="/category/<?= $c->id; ?>" class="card border-0 shadow btn-warning text-center text-decoration-none">
                    <div class="card-body my-3">
                        <h6 class="card-title"><?= $c->name; ?></h6>
                    </div>
                </a>
            </div>
        <?php } ?>
        <div class="col-lg-12 text-center">
            <a href="/category" class="nav-link">Lainnya &rarr;</a>
        </div>
    </section>

    <!-- product -->
    <section class="row mb-5" id="product">
        <div class="col-12 mb-3">
            <h2>Product</h2>
        </div>
        <?php foreach ($product as $p) { ?>
            <div class="col-6 col-lg-4  mb-4 mb-lg-3">
                <div class="card border-0 shadow-sm text-decoration-none">
                    <img class="product-thumbnail rounded" src="<?= $p->thumbnail; ?>" alt="<?= $p->name; ?>">
                    <div class="card-body">
                        <a href="/product/<?= $p->id; ?>" class="card-title h5 text-decoration-none"><?= $p->name; ?></a>
                        <h4><span class="fw-bold"><?= $p->price; ?></span> IDR</h4>
                        <div class="d-inline-block">
                            <a href="/category/<?= $p->id_category; ?>" class="btn btn-sm btn-outline-dark border text-decoration-none"><?= $p->c_name; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col-lg-12 text-center">
            <a href="/product" class="nav-link">Lainnya &rarr;</a>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>