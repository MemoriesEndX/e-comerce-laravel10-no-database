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
    <nav class="navbar navbar-expand-lg bg-white fixed-top py-2 shadow-sm">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" >
            <img src="{{ asset('assets/img/Fashion.png') }}" alt="Toko Logo" class="logo-image" width="70" height="auto">
          </a>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Search Bar -->
            <div class="input-group mx-auto mt-5 mt-lg-0">
              <input type="text" class="form-control" placeholder="Mau cari Trendy Apa Nih Sob??" aria-label="Mau cari apa?" aria-describedby="button-addon2">
              <button class="btn btn-outline-warning" type="button" id="button-addon2">
                <i class="bx bx-search"></i>
              </button>
            </div>
      
            <!-- Navbar Links -->
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
      
              <!-- Mobile Menu -->
              <div class="dropdown mt-3 d-lg-none">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/index">Home</a></li>
                  <li><a class="dropdown-item" href="#">Best Seller</a></li>
                  <li><a class="dropdown-item" href="#">New Arrival</a></li>
                  <li><a class="dropdown-item" href="#">Blog</a></li>
                </ul>
              </div>
      
              <!-- Login & Register -->
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
      
      <!-- Breadcrumb Section -->
      <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
        <div class="container">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Products</a></li>
              <li class="breadcrumb-item active" aria-current="page">Single Product Page</li>
            </ol>
          </nav>
        </div>
      </section>
      

      <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="product-images" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/1.jpg') }}" alt="Product 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/2.jpg') }}" alt="Product 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/3.jpg') }}" alt="Product 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/4.jpg') }}" alt="Product 4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#product-images" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#product-images" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <ol class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="active" data-bs-slide-to="0" data-bs-target="#product-images">
                                    <img src="{{ asset('assets/img/1.jpg') }}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#product-images">
                                    <img src="{{ asset('assets/img/2.jpg') }}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#product-images">
                                    <img src="{{ asset('assets/img/3.jpg') }}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#product-images">
                                    <img src="{{ asset('assets/img/4.jpg') }}" class="img-fluid">
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-detail mt-6 mt-md-0">
                        <h1 class="mb-1">Elegant Comfort Wear - Stylish dan Nyaman untuk Segala Kesempatan</h1>
                        <div class="mb-3 rating">
                            <small class="text-warning">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </small>
                            <a href="#" class="ms-2">(30 reviews)</a>
                        </div>
                        <div class="price">
                            <span class="active-price text-dark">IDR 150.000</span>
                            <span class="text-decoration-line-through text-muted ms-1">200.000</span>
                            <span><small class="discount-percent ms-2 text-danger">25% Off</small></span>
                        </div>
                        <hr class="my-6">
                        <div class="product-select mt-3 row justify-content-start g-2 align-items-center">
                            <div class="col-md-2 col-2">
                                <input type="number" name="qty" value="1" class="form-control" min="1" />
                            </div>
                            <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                                <button type="button" class="btn btn-add-cart"><i class="bx bx-cart-alt"></i> Add to cart</button>
                            </div>
                            <div class="col-md-4 col-4">
                                <a class="btn btn-light" href="shop-wishlist.html" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="bx bx-heart"></i></a>
                            </div>
                        </div>
                        <hr class="my-6">
                        <div class="product-info">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>SKU:</td>
                                        <td>FBB00255</td>
                                    </tr>
                                    <tr>
                                        <td>Availability:</td>
                                        <td>In Stock</td>
                                    </tr>
                                    <tr>
                                        <td>Type:</td>
                                        <td>Fruits</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping:</td>
                                        <td><small>01 day shipping.<span class="text-muted">( Free pickup today)</span></small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="my-6">
                        <div class="product-share">
                            <ul>
                                <li><a href="#"><i class="bx bxl-facebook-circle"></i></a></li>
                                <li><a href="#"><i class="bx bxl-pinterest"></i></a></li>
                                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-description pt-5">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-product-details-tab" data-bs-toggle="tab" data-bs-target="#nav-product-details" type="button" role="tab" aria-controls="nav-product-details" aria-selected="true">Details</button>
                            <button class="nav-link" id="nav-product-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-product-reviews" type="button" role="tab" aria-controls="nav-product-reviews" aria-selected="false">Reviews</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active p-3" id="nav-product-details" role="tabpanel" aria-labelledby="nav-product-details-tab">
                            <div class="my-8">
                                <div class="mb-5">
                                    <h4 class="mb-1">Nutrient Value &amp; Benefits</h4>
                                    <p class="mb-0">Baju ini dirancang dengan bahan berkualitas tinggi yang nyaman dipakai sehari-hari. Dengan desain stylish dan warna netral, produk ini cocok untuk berbagai kesempatan, baik acara formal maupun santai. Tekstur kain lembut dan ringan membuatnya ideal untuk cuaca hangat.</p>
                                </div>
                                <div class="mb-5">
                                    <h5 class="mb-1">Storage Tips</h5>
                                    <p class="mb-0">Simpan baju di tempat yang kering dan hindari paparan langsung sinar matahari untuk menjaga warna tetap awet. Sebaiknya gunakan gantungan baju untuk menghindari kerutan yang sulit dihilangkan.</p>
                                </div>
                                <div class="mb-5">
                                    <h5 class="mb-1">Unit</h5>
                                    <p class="mb-0">3 units</p>
                                </div>
                                <div class="mb-5">
                                    <h5 class="mb-1">Seller</h5>
                                    <p class="mb-0">Kelompok 1 - Pemweb</p>
                                </div>
                                <div>
                                    <h5 class="mb-1">Disclaimer</h5>
                                    <p class="mb-0">Gambar hanya ilustrasi produk, warna dan detail mungkin sedikit berbeda dari produk aslinya. Kami berkomitmen untuk memberikan deskripsi dan kualitas produk seakurat mungkin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="nav-product-reviews" role="tabpanel" aria-labelledby="nav-product-reviews-tab">
                            <div class="review-form">
                                <h3>Write a review</h3>
                                <form>
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Your Review</label>
                                        <textarea cols="4" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <footer>
        <div class="bg-secondary bg-gradient text-light container-fluid pt-5">
          <div class="row row-content">
            <div class="col-md-6">
              <h1 class="logo-brand text-light"><img src="{{ asset('frontend/assets/img/Fashion 2.png') }}" alt="Toko Logo" class="logo-image" width="250" height="auto"></h1>
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
      <script src="{{ asset('frontend/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/plugins/jqueryui/jquery-ui.min.js') }}"></script>
      
      <!-- Main JS-->
      <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>