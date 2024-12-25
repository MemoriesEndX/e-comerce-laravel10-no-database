<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external boxicons and Bootstrap CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/main.css">

    <title>Trends untirta</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="frontend/assets/img/Fashion.png" alt="Toko Logo" class="logo-image" width="120" height="auto">
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

    <!-- Menu Wrapper -->
    <div class="container menu-wrapper fixed-top d-none d-lg-block">
        <div class="menu d-flex justify-content-center align-items-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Best Seller</a>
            <a class="nav-link" href="#">New Arrival</a>
            <a class="nav-link" href="#">Blog</a>
        </div>
    </div>

    <!-- Header -->
    <section class="header">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="frontend/assets/img/slide1.jpg" class="d-block w-100" alt="slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="frontend/assets/img/slide2.jpg" class="d-block w-100" alt="slide 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Popular -->
<section class="popular">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6">
          <h1>Popular</h1>
        </div>
        <div class="col-6 text-end">
          <a href="#" class="btn btn-secondary bg-gradient">View All</a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-3 col-6">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="product.html"><img src="{{ asset('assets/img/shop_01.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Elegant White Turtleneck</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 189.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="product.html"><img src="{{ asset('assets/img/shop_02.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Classic Buttoned Dress</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 245.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-3 mt-lg-0">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="product.html"><img src="{{ asset('assets/img/shop_03.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Casual Denim Dress</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 176.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-3 mt-lg-0">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="#"><img src="{{ asset('assets/img/shop_04.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Ethnic Vest Style</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 220.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
    <!-- Latest -->
<section class="popular">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6">
          <h1>Latest</h1>
        </div>
        <div class="col-6 text-end">
          <a href="#" class="btn btn-secondary bg-gradient">View All</a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-3 col-6">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="product.html"><img src="{{ asset('assets/img/shop_01.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Elegant White Turtleneck</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 189.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="product.html"><img src="{{ asset('assets/img/shop_02.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Classic Buttoned Dress</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 245.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-3 mt-lg-0">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="product.html"><img src="{{ asset('assets/img/shop_03.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Casual Denim Dress</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 176.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-3 mt-lg-0">
          <div class="card card-product card-body p-lg-4 p3">
            <a href="#"><img src="{{ asset('assets/img/shop_04.jpg') }}" alt="" class="img-fluid"></a>
            <h3 class="product-name mt-3">Ethnic Vest Style</h3>
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 220.000</p>
              <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <!-- Subscribe Section -->
    <aside class="bg-secondary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
            <div class="mb-4 mb-xl-0">
                <div class="fs-3 fw-bold text-white">Selalu Terhubung dengan Kami!</div>
                <div class="text-white-50">Jangan Lewatkan Kabar dan Penawaran Spesial!</div>
            </div>
            <div class="ms-xl-4">
                <div class="input-group mb-12 w-100">
                    <input class="form-control py-2" type="text" placeholder="Enter your email to stay updated...">
                    <button class="btn btn-outline-light" type="button">Sign up</button>
                </div>
            </div>
        </div>
    </aside>

    <!-- Footer -->
    <footer>
        <div class="bg-secondary bg-gradient text-light container-fluid pt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="frontend/assets/img/Fashion 2.png" alt="Toko Logo" class="logo-image" width="250">
                    <p>Temukan berbagai produk berkualitas dengan harga terbaik hanya di Trends Untirta.</p>
                </div>
                <div class="col-md-3">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="#" class="text-light">Home</a></li>
                        <li><a href="#" class="text-light">Best Seller</a></li>
                        <li><a href="#" class="text-light">Category</a></li>
                        <li><a href="#" class="text-light">Community</a></li>
                        <li><a href="#" class="text-light">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Company</h3>
                    <a href="mailto:info@untirta.ac.id" class="text-light">info@untirta.ac.id</a>
                    <p>Universitas Sultan Ageng Tirtayasa, Banten</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">&copy; 2023 Kelompok 1. All rights reserved.</div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-light"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="#" class="text-light"><i class="bx bxl-facebook-circle"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include External JS -->
    <script src="frontend/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
