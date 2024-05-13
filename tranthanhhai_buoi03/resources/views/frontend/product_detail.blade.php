@extends('layouts.site')
@section('title','Chi tiết sản phẩm')
@section('content')

<section class="maincontent">
        <div class="container">
            <div class="row product-header">
                <div class="col-md-6 mt-4">
                    <img class="card-img-top" src="{{asset ('img/card_3.webp')}}" alt="" style="width:400px">
                </div>
                <div class="col-md-6">
                    <h4 class="product-name mt-3 text-start">ÁO KHOÁC CÓ MŨ BELLFIELD</h4>
                    <h4 class="product-price">Giá: 350.000 VNĐ</h4>
                    <hr class="m-0 p-0 mb-1">
                    <p>Mô tả đang cập nhật <br> <br>
                    Thương hiệu: <strong>Bellfield</strong> <br>
                    Mã sản phẩm:  <strong>Đang cập nhật </strong></p>
                    <div class="input-group mb-3 mt-3">
                        <input name="qty" type="number" value="1" class="form-control" aria-describedby="basic-addon2">
                        <button name="ADDCART" type="submit" class="input-group-text" id="basic-addon2">Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="row product-detail">
                <div class="col-md-12">
                    <h3 class="mt-2">CHI TIẾT SẢN PHẨM</h3>
                    Trench coat là một trong những món đồ mà mọi người đều biết chúng rất phù hợp với mùa thu đông cũng như những lúc thời tiết trở lạnh. Tuy là một món thời trang cổ điển, nhưng trench coat dường như có một sức sống mãnh liệt. <br>
                    Trench coat được mặc bên ngoài bộ suit không làm mất đi tính trang trọng, lịch lãm của set đồ mà còn giúp cho người mặc trông thật tuyệt vời.Với kiểu cổ cao, được thiết kế chi tiết lông thú ở cổ, chiếc trench coat này đem đến vẻ ngoài đậm chất cổ điển, phù hợp với những ai ưa thích phong cách retro.Chiếc áo phao dày dặn bên trong kết hợp cùng trench coat bên ngoài gợi nên hình ảnh một quý ông vô cùng lịch lãm. </p>
                </div>
                <img class="card-img-top" src="{{asset ('img/card_11.webp')}}" alt="" style="width:600px; margin-left: 300px;">
                <p>Chiếc áo sweater bên trong trench coat tạo nên vẻ ngoài mang một chút năng động, cá tính và thời trang hiện đại. Điểm nhấn của chiếc quần chino đầy trẻ trung kết hợp cùng áo blazer và trench coat thành một set đồ mang đậm vẻ phong trần, mới mẻ cho người mặc. Chiếc quần dạ cũng không phải là ý kiến tồi khi kết hợp với trench coat, vẻ ngoài vừa cổ điển vừa hiện đại của các chàng sẽ được phô diễn một cách tinh tế. Với phụ kiện là một chiếc ô (dù) đen, set đồ mang lại sự nhẹ nhàng của mùa thu, giúp chàng thoải mái cùng các nàng dạo bước trong những chuyến đi chơi đầy thú vị. Kiểu quần jean khi kết hợp với trench coat là một sự phá cách hoàn toàn mới đem lại sự năng động và sức lôi cuốn cho chàng trai.</p>
            </div>
            <h3 class="mt-2 mb-3 text-center">SẢN PHẨM CÙNG LOẠI</h3>
            <div class="row one-row">
                <div class="col-12">
                    <div class="item-product">
                        <div class="card text-center mx-2" style="width: 18rem;">
                            <img src="{{asset ('img/card_3.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title ">Áo khoác có mũ Bellfield</p>
                                <h5>
                                    <p class="card-text"><strong>350.000đ</strong></p>  
                                <h5>
                            </div>
                        </div>
                        <div class="card text-center mx-2" style="width: 18rem;">
                            <img src="{{asset ('img/card_1.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title">Quần Kaki ống suông NEW LOOK</p>
                                <h5>
                                    <p class="card-text"><strong>350.000đ</strong></p>
                                </h5>
                            </div>
                        </div>
                        <div class="card text-center mx-2" style="width: 18rem;">
                            <img src="{{asset ('img/card_2.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">EGA</span>
                                <p class="card-title">Quần vải ống suông FARAH</p>
                                <h5>
                                    <p class="card-text"><strong>350.000đ</strong></p>
                                </h5>
                            </div>
                        </div>
                        <div class="card text-center mx-2" style="width: 18rem;">
                            <img src="{{asset ('img/card_4.webp')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="product-vendor" style="color: #666666; letter-spacing:2px">YINLI</span>
                                <p class="card-title">Áo khoác dạ SELECTED HOMME</p>
                                <h5>
                                    <p class="card-text"><strong>350.000đ</strong></p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <a class="xemthemsp">Xem thêm sản phẩm</a>     
    </section>
@endsection
