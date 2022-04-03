<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container px-3 py-5 my-5">
    <!-- category -->
    <section class="row mb-5" id="category">
        <div class="col-12 mb-3">
            <h2>Category: "<?= $category->name; ?>"</h2>
        </div>
        <div class="col-12 mb-3">
            <a href="edit/<?= $category->id; ?>" class="btn btn-warning">Edit</a>
            <a href="delete/<?= $category->id; ?>" class="btn btn-danger" onclick="return confirm(`Are you sure delete '<?= $category->name; ?>' category?`)">Delete</a>
        </div>
        <div class="col-12 mb-3">
            <?php if (session()->getFlashdata('message')) { ?>
                <div div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
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
    </section>
</div>
<?= $this->endSection(); ?>