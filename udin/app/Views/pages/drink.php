<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="p-3 mb-2 bg-light text-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-3 py-5 mb-3">
                <h1 class="fw-bold" style="text-align: center;">Category</h1>
                <h3 class="fw-bold" style="text-align: center;">Food</h3>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <a href="<?= base_url('food') ?>" class="btn btn-sm btn-outline-dark border text-decoration-none" type="button">Food</a>
                <a href="<?= base_url('drink') ?>" class="btn btn-sm btn-outline-dark border text-decoration-none" type="button">Drink</a>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-12">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1605851868183-7a4de52117fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="img-fluid ukuran" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center text-success">Kwitiaw</h5>
                        <h4><span class="fw-bold text-center">$14</span> USD</h3>
                            <h4><span class="fw-bold text-center">Food</h3>
                                    <div class="d-inline-block">
                                        <a href="" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-12">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1625943555419-56a2cb596640?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class=" ukuran" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center text-success">Seafood</h5>
                        <h4><span class="fw-bold text-center">$13</span> USD</h3>
                            <h4><span class="fw-bold text-center">Food</h3>
                                    <div class="d-inline-block">
                                        <a href="" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-12">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="img-fluid ukuran" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center text-success">Egg Mie</h5>
                        <h4><span class="fw-bold text-center">$16</span> USD</h3>
                            <h4><span class="fw-bold text-center">Food</h3>
                                    <div class="d-inline-block">
                                        <a href="" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>