@extends('layouts.site')
@section('title','Tất cả sản phẩm')
@section('content')

    <img src="{{ asset ('img/slider_7.webp')}}" class="d-block w-100" alt="...">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar mx-5">
                    <h4>DANH MỤC</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Giới thiệu</li>
                        <li class="list-group-item">Trang chủ</li>
                        <li class="list-group-item">Sản phẩm</li>
                        <li class="list-group-item">Tin tức</li>
                        <li class="list-group-item">Hệ thống của hàng</li>
                        <li class="list-group-item">Liên hệ</li>
                      </ul>
                    <h4>THƯƠNG HIỆU</h4>
                    <ul class="list-group mb-5">
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                          <label class="form-check-label" for="firstCheckbox"> Barvo</label>
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                          <label class="form-check-label" for="secondCheckbox"> DG</label>
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                          <label class="form-check-label" for="thirdCheckbox">ISCO</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label" for="thirdCheckbox">Zara</label>
                          </li>
                          <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label" for="thirdCheckbox">ZED</label>
                          </li>
                      </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="products">
                    <h4>Tất cả sản phẩm</h4>
                    <div class="item-product-list ">
                        <div class="card text-center mx-1" style="width: 18rem;">
                            <img src="{{ asset ('img/card_5.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title ">Quần cạp cao Asos</p>
                                <h5>
                                    <p class="card-text"><strong>599.000đ</strong></p>  
                                <h5>
                            </div>
                        </div>
                        <div class="card text-center mx-1" style="width: 18rem;">
                            <img src="{{ asset ('img/card_6.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title">Quần ống lửng Asos</p>
                                <h5>
                                    <p class="card-text"><strong>569.000đ</strong></p>                                        </h5>
                                </h5>
                            </div>
                        </div>
                        <div class="card text-center mx-1" style="width: 18rem;">
                            <img src="{{ asset ('img/card_7.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title">Chân váy midi Asos</p>
                                <h5>
                                    <p class="card-text"><strong>568.000đ</strong></p>                                        </h5>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="item-product-list" style="margin-top: -10px;">
                        <div class="card text-center mx-1" style="width: 18rem;">
                            <img src="{{ asset ('img/card_9.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title ">Áo khoác kéo khóa Asos</p>
                                <h5>
                                    <p class="card-text"><strong>1.100.000₫</strong></p>  
                                <h5>
                            </div>
                        </div>
                        <div class="card text-center mx-1" style="width: 18rem;">
                            <img src="{{ asset ('img/card_3.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title">Áo khoác có mũ Bellfield</p>
                                <h5>
                                    <p class="card-text"><strong>1.000.000₫</strong></p>                                        </h5>
                                </h5>
                            </div>
                        </div>
                        <div class="card text-center mx-1" style="width: 18rem;">
                            <img src="{{ asset ('img/card_4.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title">Áo khoác dạ Selected Homme</p>
                                <h5>
                                    <p class="card-text"><strong>2.500.000₫</strong></p>                                        </h5>
                                </h5>
                            </div>
                        </div>

                    </div>
                    <nav aria-label="Page navigation exampl">
                        <ul class="pagination justify-content-center" >
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" style="background-color: #00BFFF; color: white;" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
