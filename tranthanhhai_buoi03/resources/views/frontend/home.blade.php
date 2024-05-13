@extends('layouts.site')
@section('title','Trang chủ')
@section('content')

<main class="main_content">
        <section class="slider">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset ('img/slider_1.webp')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('img/slider_2.webp')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('img/slider_1.webp')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
    </main>
    <section class="maincontent">
        <div class="ega-policies ">
            <div class="container ">
                <div class="policies-body mt-5">
                    <div class="policies-item text-center ">
                        <div class="border border-primary p-3 rounded-3">
                            <div class="policies-image">
                                <img src="{{ asset ('img/policies_icon_1.webp')}}" alt="" width="40" height="40" class="img-fluid">
                            </div>
                            <div class="policies-info">
                                <h3 class="policies-title">Miễn phí vận chuyển</h3>
                                <div class="policies-desc">Nhận hàng trong vòng 3 ngày</div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary p-2 rounded-3">
                        <div class="policies-item text-center">
                            <div class="policies-image">
                                <img src="{{ asset ('img/policies_icon_2.webp')}}" alt="policies_icon_2.png" width="40" height="40" class="img-fluid">
                            </div>
                            <div class="policies-info">
                                <h3 class="policies-title">Quà tặng hấp dẫn</h3>
                                <div class="policies-desc">Nhiều ưu đãi khuyến mãi hot</div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary p-2 rounded-3">
                        <div class="policies-item text-center">
                            <div class="policies-image">
                                <img src="{{ asset ('img/policies_icon_3.webp')}}" alt="policies_icon_3.png" width="40" height="40" class="img-fluid">
                            </div>
                            <div class="policies-info">
                                <h3 class="policies-title">Bảo đảm chất lượng</h3>
                                <div class="policies-desc">Sản phẩm đã dược kiểm định</div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary p-2 rounded-3">
                        <div class="policies-item text-center">
                            <div class="policies-image">
                                <img src="{{ asset ('img/policies_icon_4.webp')}}" alt="policies_icon_4.png" width="40" height="40" class="img-fluid">
                            </div>
                            <div class="policies-info">
                                <h3 class="policies-title">Hotline: 19001993</h3>
                                <div class="policies-desc">Dịch vụ hỗ trợ bạn 24/7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product ">
                <h3 class="text-center text-uppercase mt-5 pt-3">SỰ KIỆN BÙNG NỔ !</h3>
                <div class="row one-row">
                        <div class="col-12">
                            <div class="item-product ">
                                <div class="col-md-3 card text-center" style="width: 18rem;">
                                    <img src="{{ asset ('img/card_3.webp')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                        <p class="card-title ">Áo khoác có mũ Bellfield</p>
                                        <h5>
                                            <p class="card-text"><strong>350.000đ</strong></p>  
                                        <h5>
                                    </div>
                                </div>
                                <div class="col-md-3 card text-center" style="width: 18rem;">
                                    <img src="{{ asset ('img/card_1.webp')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                        <p class="card-title">Quần Kaki ống suông NEW LOOK</p>
                                        <h5>
                                            <p class="card-text"><strong>350.000đ</strong></p>                                        </h5>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-3 card text-center" style="width: 18rem;">
                                    <img src="{{ asset ('img/card_2.webp')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                        <p class="card-title">Quần vải ống suông FARAH</p>
                                        <h5>
                                            <p class="card-text"><strong>350.000đ</strong></p>                                        </h5>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-3 card text-center" style="width: 18rem;">
                                    <img src="{{ asset ('img/card_4.webp')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="product-vendor" style="color: #666666; letter-spacing:2px">YINLI</span>
                                        <p class="card-title">Áo khoác dạ SELECTED HOMME</p>
                                        <h5>
                                            <p class="card-text"><strong>350.000đ</strong></p>                                        </h5>
                                        </h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> 

                <div class="menu">
                    <img src="{{ asset ('img/slider_3.webp')}}" class="card-img-top mb-5" alt="...">
                    <h3 class="text-center text-uppercase">THỜI TRANG NỮ</h3>
                    <ul class="items">
                       <li class="active">ĐẦM - VÁY</li> 
                       <li>QUẦN ÁO</li> 
                       <li>GIÀY</li> 
                       <li>TÚI XÁCH</li> 
                       <li>PHỤ KIỆN</li>  
                   </ul>
                   <div class="row one-row">
                    <div class="col-12">
                        <div class="item-product ">
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_5.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title ">Quần cạp cao Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>599.000đ</strong></p>  
                                    <h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_6.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Quần ống lửng Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>569.000đ</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_7.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Chân váy midi Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>568.000đ</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_8.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">YINLI</span>
                                    <p class="card-title">Chân váy bút chì Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>319.000đ</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item-product ">
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_5.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title ">Quần cạp cao Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>599.000đ</strong></p>  
                                    <h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_6.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Quần ống lửng Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>569.000đ</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_7.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Chân váy midi Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>568.000đ</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_8.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">YINLI</span>
                                    <p class="card-title">Chân váy bút chì Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>319.000đ</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <img src="{{ asset ('img/slider_4.webp')}}" class="card-img-top mb-5" alt="...">
                    <h3 class="text-center text-uppercase">THỜI TRANG NAM</h3>
                    <ul class="items">
                       <li class="active">ÁO SƠ MI</li> 
                       <li>ÁO THUN</li> 
                       <li>QUẦN</li> 
                       <li>TÚI</li> 
                       <li>PHỤ KIỆN</li>  
                   </ul>
                   <div class="row one-row">
                    <div class="col-12">
                        <div class="item-product ">
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_9.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title ">Áo khoác kéo khóa Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>1.100.000₫</strong></p>  
                                    <h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_3.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Áo khoác có mũ Bellfield</p>
                                    <h5>
                                        <p class="card-text"><strong>1.000.000₫</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_4.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Áo khoác dạ Selected Homme</p>
                                    <h5>
                                        <p class="card-text"><strong>2.500.000₫</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_10.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">YINLI</span>
                                    <p class="card-title">Áo thun dài tay Fred Perry</p>
                                    <h5>
                                        <p class="card-text"><strong>1.000.000₫</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item-product ">
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_9.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title ">Áo khoác kéo khóa Asos</p>
                                    <h5>
                                        <p class="card-text"><strong>1.100.000₫</strong></p>  
                                    <h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_3.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Áo khoác có mũ Bellfield</p>
                                    <h5>
                                        <p class="card-text"><strong>1.000.000₫</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_4.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                    <p class="card-title">Áo khoác dạ Selected Homme</p>
                                    <h5>
                                        <p class="card-text"><strong>2.500.000₫</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-3 card text-center mx-3" style="width: 18rem;">
                                <img src="{{ asset ('img/card_10.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="product-vendor" style="color: #666666; letter-spacing:2px">YINLI</span>
                                    <p class="card-title">Áo thun dài tay Fred Perry</p>
                                    <h5>
                                        <p class="card-text"><strong>1.000.000₫</strong></p>                                        </h5>
                                    </h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    <h3 class="text-center text-uppercase">TIN TỨC</h3>
                    <h5 class="text-center">Cập nhật tin tức thời trang mới nhất diễn ra trong tuần</h5>
                    <div class="lastnew">
                        <div class="item">
                            <img src="{{ asset ('img/lastnew_1.webp')}}" alt="Hình ảnh 1">
                            <div class="info">
                                <div class="date">Những tông màu “sánh đôi” hoàn hảo với trang phục xanh navy</div>
                                <div class="description">CÁC SẮC THÁI XANH DƯƠNG
                                    Là gam màu “dễ tính”, xanh navy dễ dàng đồng điệu cùng các tông màu xanh, từ xanh baby ngọt ngào, xanh cobalt cho đến xanh mòng két. Để tạo được...</div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset ('img/lastnew_2.webp')}}" alt="Hình ảnh 2">
                            <div class="info">
                                <div class="date">Khi các thương hiệu thời trang Việt gặp gỡ và giao thoa</div>
                                <div class="description">Dấu ấn cá nhân là chìa khóa để khẳng định tên tuổi tại làng mốt, trong lẫn ngoài nước. Các NTK ở những thế hệ khác nhau với phong cách riêng, nhưng tất cả đều có chung đam mê lẫn...</div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset ('img/lastnew_3.webp')}}" alt="Hình ảnh 3">
                            <div class="info">
                                <div class="date">Những dấu ấn thú vị cho thời trang mùa Thu Đông không còn đơn điệu</div>
                                <div class="description">Những cơn gió mùa Đông thổi qua thành phố, đôi khi gợi nhắc chúng ta về những món đồ vốn đang nằm thu mình nơi góc tủ. Đó có thể là những điểm nhấn dành cho bạn trong tiết trời...</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
