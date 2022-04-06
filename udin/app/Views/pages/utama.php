<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- awalan -->
<div class="container px-3 py-5">
    <div class="row flex-lg-row-reverse py-5">
        <div class="col-lg-6 col-12">
            <img src="https://images.unsplash.com/photo-1542634093-e0198d4d1e46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid rounded shadow-lg mx-auto" alt="...">
        </div>
        <div class="col-lg-6 col-12">
            <h1 class=" fw-bold lh-1 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem, suscipit expedita quo sed officia tenetur. Eveniet, fugiat commodi! Consequuntur et porro quisquam voluptates tempore est rerum animi vitae necessitatibus.</p>
            <div class="d-grid d-md-flex justify-content-md-start">
                <a href=" " class="btn btn-lg btn-info me-2">Get Started</a>
                <a href=" " class="btn btn-lg btn-outline-info me-2">Explore Menu</a>
            </div>
        </div>
    </div>
</div>
<!-- awalan -->
<!-- category -->
<div class="p-3 mb-2 bg-light text-dark">
    <div class="container">
        <div class="row">
            <div class="d-grid gap-2 col-6 mx-auto">
                <h1 class="fw-bold" style="text-align: center;">Category</h1>
                <a href="<?= base_url('food'); ?> " class="btn btn-lg btn-outline-info me-2">Food</a>
                <a href="<?= base_url('drink'); ?>" class="btn btn-lg btn-outline-info me-2">Drink</a>
            </div>
        </div>
    </div>
</div>
<!-- end category -->
<!-- <div class="p-3 mb-2 bg-light text-dark"> -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="fw-bold" style="text-align: center;">Product</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row row-cols-3 row-cols-md-3 g-4">
        <div class="col-6 col-lg-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1526401281623-279b498f10f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="img-fluid ukuran" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center text-success">Coffee</h5>
                    <h4><span class="fw-bold text-center">$12</span> USD</h3>
                        <h4><span class="fw-bold text-center">Drink</h3>
                                <div class="d-inline-block">
                                    <a href="#" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="card">
                <img src=" https://images.unsplash.com/photo-1453824979084-c8fd42932378?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center text-success">Lemon</h5>
                    <h4><span class="fw-bold text-center">$11</span> USD</h3>
                        <h4><span class="fw-bold text-center">Drink</h3>
                                <div class="d-inline-block">
                                    <a href="#" class=" btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1631503190221-0f6a15367926?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="img-fluid ukuran" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center text-success">Syirup</h5>
                    <h4><span class="fw-bold text-center">$9</span> USD</h3>
                        <h4><span class="fw-bold text-center">Drink</h3>
                                <div class="d-inline-block">
                                    <a href="#" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1605851868183-7a4de52117fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="img-fluid ukuran" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center text-success">Kwitiaw</h5>
                    <h4><span class="fw-bold text-center">$14</span> USD</h3>
                        <h4><span class="fw-bold text-center">Food</h3>
                                <div class="d-inline-block">
                                    <a href="#" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1625943555419-56a2cb596640?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class=" ukuran" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center text-success">Seafood</h5>
                    <h4><span class="fw-bold text-center">$13</span> USD</h3>
                        <h4><span class="fw-bold text-center">Food</h3>
                                <div class="d-inline-block">
                                    <a href="#" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="img-fluid ukuran" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center text-success">Egg Mie</h5>
                    <h4><span class="fw-bold text-center">$16</span> USD</h3>
                        <h4><span class="fw-bold text-center">Food</h3>
                                <div class="d-inline-block">
                                    <a href="#" class="btn btn-sm btn-outline-dark border text-decoration-none">Cek This Product</a>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Product -->

<!-- end Product -->
<?= $this->endSection('content'); ?>