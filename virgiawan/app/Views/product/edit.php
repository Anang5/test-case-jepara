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
                    <form action="/product/update/<?= $product->id; ?>" method="post">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="id_category" id="category">
                                <?php foreach ($category as $c) { ?>
                                    <option value="<?= $c->id; ?>" <?= ($c->id == $product->id_category) ? 'selected' : ''; ?>><?= $c->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="product-name" placeholder="e.g. Nasi Goreng" value="<?= $product->name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="e.g. https://example.com/thumbnail.jpg" value="<?= $product->thumbnail; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="product-price" class="form-label">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" name="price" id="product-price" placeholder="e.g. 10000" value="<?= $product->price; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <!-- save and cancel button -->
                            <input type="submit" class="btn btn-primary" id="update-product" value="Update">
                            <a href="../<?= $product->id; ?>" class="btn btn-secondary" id="cancel-product">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>