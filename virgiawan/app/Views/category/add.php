<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container px-3 py-5 my-5">
    <section class="row mb-5" id="category">
        <div class="col-12 mb-3">
            <h2><?= $title; ?></h2>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="./save" method="post">
                        <div class="mb-3">
                            <label for="category-name" class="form-label">Name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" id="category-name" placeholder="e.g. Makanan" value="<?= old('name'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <!-- save and cancel button -->
                            <input type="submit" class="btn btn-primary" id="save-category" value="Save">
                            <a href="./" class="btn btn-secondary" id="cancel-category">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>