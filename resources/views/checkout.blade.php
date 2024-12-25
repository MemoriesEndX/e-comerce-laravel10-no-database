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

    <title>Trends untirta</title>
</head>


<body>

    <nav class="navbar navbar-expand-lg bg-white fixed-top py-2 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/Fashion.png') }}" alt="Toko Logo" class="logo-image" width="70" height="auto">
            </a>
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
                            <li><a class="dropdown-item" href="#">Home</a></li>
                            <li><a class="dropdown-item" href="#">Best Seller</a></li>
                            <li><a class="dropdown-item" href="#">New Arrival</a></li>
                            <li><a class="dropdown-item" href="#">Blog</a></li>
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
    



    <section class="main-content">
        <div class="container">
            <div class="row">
                <section class="col-lg-12 col-md-12 shopping-cart">
                    <div class="card mb-4 bg-light border-0 section-header">
                        <div class="card-body p-5">
                            <h2 class="mb-0">Checkout</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0"><i class='bx bx-map'></i> Delivery Address</h5>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Add a new address</a>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="card card-body p-6">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="homeRadio" checked="">
                                                <label class="form-check-label text-dark" for="homeRadio">Home</label>
                                            </div>
                                            <!-- address -->
                                            <address>
                                                <strong>Sugiarto</strong>
                                                <br>
    
                                                Grand Village Banguntapan Z1
                                                <br>
    
                                                Jl. Imogiri Timur 5, Bantul, Yogyakarta.
                                                <br>
    
                                                <abbr title="Phone">P: 0820-2310-2123</abbr>
                                            </address>
                                            <span class="text-danger">Default address</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="card card-body p-6">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="homeRadio">
                                                <label class="form-check-label text-dark" for="homeRadio">Office</label>
                                            </div>
                                            <!-- address -->
                                            <address>
                                                <strong>IndoKoding Office</strong>
                                                <br>
    
                                                Grand Village Banguntapan Z1
                                                <br>
    
                                                Jl. Imogiri Timur 5, Bantul, Yogyakarta.
                                                <br>
    
                                                <abbr title="Phone">P: 0820-2310-2123</abbr>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-0"><i class='bx bxs-truck'></i> Delivery Service</h5>
                            <div class="mt-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="courier_code" id="inlineRadio1"
                                        value="jne">
                                    <label class="form-check-label" for="inlineRadio1">JNE</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="courier_code" id="inlineRadio2"
                                        value="pos">
                                    <label class="form-check-label" for="inlineRadio2">POS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="courier_code" id="inlineRadio2"
                                        value="tiki">
                                    <label class="form-check-label" for="inlineRadio2">TIKI</label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p>Available services:</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item py-3 border-top fw-bold">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2 col-lg-2"></div>
                                            <div class="col-4 col-md-4 col-lg-5">
                                                Service
                                            </div>
                                            <div class="col-3 col-md-2 col-lg-2">
                                                Estimate
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                Cost
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2 col-lg-2">
                                                <input class="form-check-input" type="radio" name="delivery_package"
                                                    id="inlineRadio2" value="oke">
                                            </div>
                                            <div class="col-4 col-md-4 col-lg-5">
                                                OKE (Ongkos Kirim Ekonomis)
                                            </div>
                                            <div class="col-3 col-md-2 col-lg-2">
                                                4-5
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">IDR 20.000</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2 col-lg-2">
                                                <input class="form-check-input" type="radio" name="delivery_package"
                                                    id="inlineRadio2" value="reguler">
                                            </div>
                                            <div class="col-4 col-md-4 col-lg-5">
                                                REG (Layanan Reguler)
                                            </div>
                                            <div class="col-3 col-md-2 col-lg-2">
                                                2-3
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">IDR 30.000</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="#" class="btn btn-success ">Back to Shopping Cart</a>
                                <a href="#" class="btn btn-success">Place Order</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-6">
                            <div class="mb-5 card mt-6">
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <h2 class="h5 mb-4">Order Details</h2>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3 border-top">
                                            <div class="row align-items-center">
                                                <div class="col-6 col-md-6 col-lg-7">
                                                    <div class="d-flex">
                                                        <img src="{{ asset('assets/img/p1.jpg') }}" alt="Ecommerce"
                                                            style="height: 50px;">
                                                        <div class="ms-3">
                                                            <span>
                                                                <small class="text-muted">IDR 200.000</small>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    1
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
                                                        <img src="{{ asset('assets/img/p2.jpg') }}" alt="Ecommerce"
                                                            style="height: 50px;">
                                                        <div class="ms-3">
                                                            <span>
                                                                <small class="text-muted">IDR 200.000</small>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    1
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
                                                        <img src="{{ asset('assets/img/p3.jpg') }}" alt="Ecommerce"
                                                            style="height: 50px;">
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 col-lg-2">
                                                    1
                                                </div>
                                                <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                    <span class="fw-bold">IDR 200.000</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>Item Subtotal</div>
                                                <div class="fw-bold">IDR 500.000</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>Shipping Fee</div>
                                                <div class="fw-bold">IDR 20.000</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>Tax (11%)</div>
                                                <div class="fw-bold">IDR 10.000</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3">
                                            <div class="d-flex align-items-center justify-content-between mb-2 fw-bold">
                                                <div>Grand Total</div>
                                                <div>IDR 500.000</div>
                                            </div>
                                        </li>
                                    </ul>
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
                    <img src="{{ asset('assets/img/Fashion 2.png') }}" alt="Toko Logo" class="logo-image" width="250" height="auto">
                </h1>
                <p>Temukan berbagai produk berkualitas dengan harga terbaik hanya di Trends untirta.</p>
            </div>
            <div class="col-md-3 mt-4 mt-sm-0">
                <h3 class="mb-3 text-light">Navigation</h3>
                <ul class="p-0">
                    <li><a href="#" class="text-light">Home</a></li>
                    <li class="mt-3"><a href="#" class="text-light">Best Seller</a></li>
                    <li class="mt-3"><a href="#" class="text-light">Category</a></li>
                    <li class="mt-3"><a href="#" class="text-light">Community</a></li>
                    <li class="mt-3"><a href="#" class="text-light">Blog</a></li>
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
                <a href="#" class="text-light"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#" class="text-light"><i class='bx bxl-facebook-circle'></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/jqueryui/jquery-ui.min.js') }}"></script>

<!-- Main JS-->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>