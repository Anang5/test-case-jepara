<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container px-3 py-5 my-5">
    <!-- category -->
    <section class="row mb-5" id="category">
        <div class="col-12 mb-3">
            <h2><?= $title; ?></h2>
        </div>
        <div class="col-12 mb-3">
            <a href="/category/add" class="btn btn-primary">Add Category</a>
        </div>
        <div class="col-12 mb-3">
            <?php if (session()->getFlashdata('message')) { ?>
                <div div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
        <?php foreach ($category as $c) { ?>
            <div class="col-5 col-lg-3 mb-4 mb-lg-3">
                <a href="/category/<?= $c->id; ?>" class="card border-0 shadow btn-warning text-center text-decoration-none">
                    <div class="card-body my-3">
                        <h6 class="card-title"><?= $c->name; ?></h6>
                    </div>
                </a>
            </div>
        <?php } ?>
    </section>
</div>
<?= $this->endSection(); ?>