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
        <!-- <div class="col-6 col-lg-4  mb-4 mb-lg-3">
            <div class="card border-0 shadow-sm text-decoration-none">
                <img class="product-thumbnail rounded" src="https://images.unsplash.com/photo-1594007654729-407eedc4be65?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=428&q=80" alt="Pizza">
                <div class="card-body">
                    <a href="./product/3" class="card-title h5 text-decoration-none">Pizza</a>
                    <h4><span class="fw-bold">120.000</span> IDR</h3>
                        <div class="d-inline-block">
                            <a href="./category/2.html" class="btn btn-sm btn-outline-dark border text-decoration-none">Makanan</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4  mb-4 mb-lg-3">
            <div class="card border-0 shadow-sm text-decoration-none">
                <img class="product-thumbnail rounded" src="https://images.unsplash.com/photo-1583555929401-a411458578f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Cappucinno">
                <div class="card-body">
                    <a href="./product/4.html" class="card-title h5 text-decoration-none">Cappucinno</a>
                    <h4><span class="fw-bold">10.000</span> IDR</h3>
                        <div class="d-inline-block">
                            <a href="./category/2.html" class="btn btn-sm btn-outline-dark border text-decoration-none">Minuman</a>
                        </div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12 text-center">
            <a href="/product" class="nav-link">Lainnya →</a>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>