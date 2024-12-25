<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Jquery UI -->
    <link type="text/css" href="{{ asset('frontend/plugins/jqueryui/jquery-ui.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}"> 

    <title>trends Untirta</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top py-2 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('frontend/index.html') }}"><img src="{{ asset('frontend/assets/img/Fashion.png') }}" alt="Toko Logo" class="logo-image" width="70" height="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="input-group mx-auto mt-5 mt-lg-0">
                    <input type="text" class="form-control" placeholder="Mau cari Trendy Apa Nih Sob??" aria-label="Mau cari apa?" aria-describedby="button-addon2">
                    <button class="btn btn-outline-warning" type="button" id="button-addon2"><i class="bx bx-search"></i></button>
                </div>
                <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#">
                            <i class="bx bx-heart"></i>
                            <span class="badge text-bg-warning rounded-circle position-absolute">2</span>
                        </a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cart-alt"></i>
                            <span class="badge text-bg-warning rounded-circle position-absolute">3</span>
                        </a>
                    </li>
                    <!-- mobile menu -->
                    <div class="dropdown mt-3 d-lg-none">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ url('frontend/index.html') }}">Home</a></li>
                            <li><a class="dropdown-item" href="{{ url('frontend/products.html') }}">Best Seller</a></li>
                            <li><a class="dropdown-item" href="{{ url('frontend/products.html') }}">New Arrival</a></li>
                            <li><a class="dropdown-item" href="{{ url('frontend/products.html') }}">Blog</a></li>
                        </ul>
                    </div>
                    <li class="nav-item mt-5 mt-lg-0 text-center">
                        <a class="btn px-2 py-2" href="#">Login</a>
                    </li>
                    <li class="nav-item mt-3 mt-lg-0 text-center">
                        <a class="btn btn-outline-success" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('frontend/index.html') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </section>
    



    <section class="main-content">
        <div class="container">
            <div class="row">
                <section class="col-lg-12 col-md-12 shopping-cart">
                    <div class="card mb-4 bg-light border-0 section-header">
                        <div class="card-body p-5">
                            <h2 class="mb-0">Shopping Cart</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3 border-top">
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="{{ asset('frontend/assets/img/p1.jpg') }}" alt="Ecommerce" style="height: 70px;">
                                                <div class="ms-3">
                                                    <a href="{{ url('frontend/product.html') }}">
                                                        <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                    </a>
                                                    <span>
                                                        <small class="text-muted">IDR 200.000</small>
                                                    </span>
                                                    <div class="mt-2 small lh-1">
                                                        <a href="#!" class="text-decoration-none text-inherit">
                                                            <span class="me-1 align-text-bottom">
                                                                <i class='bx bx-trash'></i>
                                                            </span>
                                                            <span class="text-muted">Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 col-lg-2">
                                            <input type="number" name="qty" value="1" class="form-control" min="1">
                                        </div>
                                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                            <span class="fw-bold">IDR 200.000</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item py-3">
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="{{ asset('frontend/assets/img/p2.jpg') }}" alt="Ecommerce" style="height: 70px;">
                                                <div class="ms-3">
                                                    <a href="{{ url('frontend/product.html') }}">
                                                        <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                    </a>
                                                    <span>
                                                        <small class="text-muted">IDR 200.000</small>
                                                    </span>
                                                    <div class="mt-2 small lh-1">
                                                        <a href="#!" class="text-decoration-none text-inherit">
                                                            <span class="me-1 align-text-bottom">
                                                                <i class='bx bx-trash'></i>
                                                            </span>
                                                            <span class="text-muted">Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 col-lg-2">
                                            <input type="number" name="qty" value="1" class="form-control" min="1">
                                        </div>
                                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                            <span class="fw-bold">IDR 200.000</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item py-3">
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="{{ asset('frontend/assets/img/p3.jpg') }}" alt="Ecommerce" style="height: 70px;">
                                                <div class="ms-3">
                                                    <a href="{{ url('frontend/product.html') }}">
                                                        <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                    </a>
                                                    <span>
                                                        <small class="text-muted">IDR 200.000</small>
                                                    </span>
                                                    <div class="mt-2 small lh-1">
                                                        <a href="#!" class="text-decoration-none text-inherit">
                                                            <span class="me-1 align-text-bottom">
                                                                <i class='bx bx-trash'></i>
                                                            </span>
                                                            <span class="text-muted">Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 col-lg-2">
                                            <input type="number" name="qty" value="1" class="form-control" min="1">
                                        </div>
                                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                            <span class="fw-bold">IDR 200.000</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ url('frontend/index.html') }}" class="btn btn-success">Continue Shopping</a>
                                <a href="#!" class="btn btn-outline-success">Update Cart</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-5">
                            <div class="mb-5 card mt-6">
                                <div class="card-body p-6">
                                    <h2 class="h5 mb-4">Summary</h2>
                                    <div class="card mb-2">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Item Subtotal</div>
                                                </div>
                                                <span>600.000</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Service Fee</div>
                                                </div>
                                                <span>2.500</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="fw-bold">Subtotal</div>
                                                </div>
                                                <span class="fw-bold">602.500</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-grid mb-1 mt-4">
                                        <button class="btn btn-success btn-lg d-flex justify-content-between align-items-center" type="submit">
                                            <a href="{{ url('frontend/checkout.html') }}" class="text-white">
                                                Go to Checkout
                                                <span class="fw-bold">602.500</span>
                                            </a>
                                        </button>
                                    </div>
                                    <p>
                                        <small>
                                            By placing your order, you agree to be bound by the Freshcart
                                            <a href="{{ url('frontend/terms.html') }}">Terms of Service</a>
                                            and
                                            <a href="{{ url('frontend/privacy.html') }}">Privacy Policy</a>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    

    <footer>
        <div class="bg-secondary bg-gradient text-light container-fluid pt-5">
            <div class="row row-content">
                <div class="col-md-6">
                    <h1 class="logo-brand text-light">
                        <img src="{{ asset('frontend/assets/img/Fashion 2.png') }}" alt="Toko Logo" class="logo-image" width="250" height="auto">
                    </h1>
                    <p>Temukan berbagai produk berkualitas dengan harga terbaik hanya di Trends untirta.</p>
                </div>
                <div class="col-md-3 mt-4 mt-sm-0">
                    <h3 class="mb-3 text-light">Navigation</h3>
                    <ul class="p-0">
                        <li><a href="{{ url('frontend/index.html') }}" class="text-light">Home</a></li>
                        <li class="mt-3"><a href="{{ url('frontend/bestseller.html') }}" class="text-light">Best Seller</a></li>
                        <li class="mt-3"><a href="{{ url('frontend/category.html') }}" class="text-light">Category</a></li>
                        <li class="mt-3"><a href="{{ url('frontend/community.html') }}" class="text-light">Community</a></li>
                        <li class="mt-3"><a href="{{ url('frontend/blog.html') }}" class="text-light">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mt-4 mt-sm-0">
                    <h3 class="mb-3 text-light">Company</h3>
                    <a href="mailto:info@untirta.ac.id" class="text-light">info@untirta.ac.id</a>
                    <p>Fakultas Teknik, Universitas Sultan Ageng Tirtayasa, Jl. Jenderal Sudirman Km 3, Kotabumi, Kec. Purwakarta, Kota Cilegon, Banten 42435</p>
                </div>
            </div>
            <div class="row row-copy mt-4 mt-sm-0">
                <div class="col-md-6">
                    <p>&copy; 2023 @Kelompok 1 - Pemograman Websites - UAS. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-sm-end">
                    <a href="{{ url('frontend/instagram.html') }}" class="text-light"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="{{ url('frontend/facebook.html') }}" class="text-light"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jqueryui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    
</body>

</html>