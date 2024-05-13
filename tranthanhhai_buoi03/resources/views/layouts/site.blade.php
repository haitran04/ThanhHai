<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/layout.css') }}">
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>

    @yield('header')
</head>
<body>
<section class="header bg-white" style="position:fixed; z-index: 1000; width:100%; ">
        <div class="container">
            <div class="row py-4">
                <div class="col-3 col-md-2 py-2 order-1 oder-md-1">
                    <a href="index.html">
                        <img src="{{ asset ('img/logo.webp') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-8 order-2 oder-md-2">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  SẢN PHẨM
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Thời trang nữ</a></li>
                                  <li><a class="dropdown-item" href="#">Thời trang nam</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">THỜI TRANG NỮ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">THỜI TRANG NAM</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">TIN TỨC</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">LIÊN HỆ</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
                <div class="col-9 col-md-2 order-3 oder-md-3 text-end py-3">
                    <ul class="nav justify-content-end">
                        <li class="nav-item px-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="nav-item px-2">
                            <i class="fa-regular fa-user"></i>
                        </li>
                        <li class="nav-item px-2">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
</section>

<main>
    @yield('content')
</main>

<section class="footer bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-center p-2">CHÍNH SÁCH HỖ TRỢ</h5>
                    <ul class="list-unstyled text-center p-2">
                        <li><a href="" class="text-white" style="text-decoration: none;">Trang chủ</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Sản phẩm</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Thời trang nữ</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Thời trang nam</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Tin tức</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-4  text-center p-2">
                    <img src="{{ asset ('img/logo.webp') }}" class="img-fluid" alt="">
                    <p class="mt-3">Sea Fashion giúp bạn bán bất cứ thứ gì. Sự lựa chọn tốt nhất cho khách hàng của Sea Fashion</p>
                    
                </div>
                <div class="col-md-4">
                    <h5 class="text-center p-2">THÔNG TIN SEA FASSHION</h5>
                    <ul class="list-unstyled text-center  p-2" >
                        <li><a href="" class="text-white" style="text-decoration: none;">Trang chủ</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Sản phẩm</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Thời trang nữ</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Thời trang nam</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Tin tức</a></li>
                        <li><a href="" class="text-white" style="text-decoration: none;">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <hr class="m-0 p-0">
            <div class="row py-3" style="margin-bottom: -50px;">
                <div class="col-12 text-center">Design by: Trần Thanh Hải</div>
            </div>
        </div>
    </section>    
    <script src="{{ asset ('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('js/layoutsite.js')}} "></script>
    @yield('footer')
</body>
</html>