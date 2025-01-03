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
        <title>Untirta Trends</title>
      </head>
<body>

  <nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="/assets/img/Fashion.png" alt="Toko Logo" class="logo-image" width="120" height="auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="input-group mx-auto mt-5 mt-lg-0">
            <input type="text" class="form-control" placeholder="Mau cari Trendy Apa Nih Sob??" aria-label="Mau cari apa?" aria-describedby="button-addon2">
            <button class="btn btn-outline-warning" type="button" id="button-addon2"><i class="bx bx-search" ></i></button>
          </div>
          <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
            <li class="nav-item me-3">
              <a class="nav-link active" href="#">
                <i class="bx bx-heart" ></i>
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
                <li><a class="dropdown-item" href="index.html">Home</a></li>
                <li><a class="dropdown-item" href="products.html">Best Seller</a></li>
                <li><a class="dropdown-item" href="products.html">New Arrival</a></li>
                <li><a class="dropdown-item" href="products.html">Blog</a></li>
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
                <a class="nav-link btn-second me-lg-3" href="#">Login</a>
              </li>
              <li class="nav-item mt-3 mt-lg-0 text-center">
                <a class="nav-link btn-first" href="#">Register</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
      <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="main-content">
      <div class="container">
        <div class="row">
          <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
            <div class="sidebar">
              <div class="sidebar-widget">
                <div class="widget-title">
                  <h5>Categories</h5>
                </div>
                <div class="widget-content widget-categories">
                  <ul class="nav nav-category">
                    <li class="nav-item border-bottom w-100">
                      <a class="nav-link active" aria-current="page" href="#">Clothing <i class='bx bx-chevron-right'></i></a>
                    </li>
                    <li class="nav-item border-bottom w-100">
                      <a class="nav-link" href="#">Shoes <i class='bx bx-chevron-right'></i></a>
                    </li>
                    <li class="nav-item border-bottom w-100">
                      <a class="nav-link" href="#">Bags <i class='bx bx-chevron-right'></i></a>
                    </li>
                    <li class="nav-item border-bottom w-100">
                      <a class="nav-link" href="#">Electronics <i class='bx bx-chevron-right'></i></a>
                    </li>
                    <li class="nav-item border-bottom w-100">
                      <a class="nav-link" href="#">Accessories <i class='bx bx-chevron-right'></i></a>
                    </li>
                  </ul>                  
                </div>
              </div>
              <div class="sidebar-widget mt-4">
                <div class="widget-title">
                  <h5>Price Range</h5>
                </div>
                <div class="widget-content shop-by-price">
                  <form method="GET" action="products.html">
                    <div class="price-filter">
                        <div class="price-filter-inner">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input d-lg-flex justify-content-between">
                                    <input type="text" id="amount" name="price"
                                        placeholder="Add Your Price" />
                                    <button type="submit" class="btn-first-sm btn ">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </aside>
          <section class="col-lg-9 col-md-12 products">
            <div class="card mb-4 bg-light border-0 section-header">
              <div class="card-body p-5">
                <h2 class="mb-0">Accessories</h2>
              </div>
            </div>
            <div class="row">
              <div class="d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                  <p class="mb-0"> <span class="text-dark">24 </span> Products found </p>
                </div>
                <div class="d-flex mt-2 mt-lg-0">
                  <div class="me-2 flex-grow-1">
                    <!-- select option -->
                    <select class="form-select">
                      <option selected="">Show: 50</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="30">30</option>
                    </select>
                  </div>
                  <div>
                    <!-- select option -->
                    <select class="form-select">
                      <option selected="">Sort by: Featured</option>
                      <option value="Low to High">Price: Low to High</option>
                      <option value="High to Low"> Price: High to Low</option>
                      <option value="Release Date"> Release Date</option>
                      <option value="Avg. Rating"> Avg. Rating</option>
    
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_01.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Elegant White Turtleneck</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 189,000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_02.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Classic Buttoned Dress</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 245,000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_03.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Casual Denim Dress</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 176,000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_04.jpg" alt="" class="img-fluid"></a>
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
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_01.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Classic Buttoned Dress</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 289.000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_02.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Casual Denim Dress</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 128.000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_03.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Ethnic Vest Style</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 298.000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="product.html"><img src="assets/img/shop_04.jpg" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Elegant White Turtleneck</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">134.000</p>
                     <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
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
            <h1 class="logo-brand text-light"><img src="/assets/img/Fashion 2.png" alt="Toko Logo" class="logo-image" width="250" height="auto"></h1>
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
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/jqueryui/jquery-ui.min.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>
</body>
</html>