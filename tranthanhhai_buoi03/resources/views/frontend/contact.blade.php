@extends('layouts.site')
@section('title','Liên hệ')
@section('content')

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-4">
                    <form name="form1" action="" method="post">
                        <div class="form-group mb-3">
                            <h6>Họ và tên (*)</h6>
                            <input name="name" type="text" required class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <h6>Email (*)</h6>
                            <input name="email" type="email" required class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <h6>Nội dung liên hệ (*)</h6>
                            <textarea name="detail" rows="3" required class="form-control" ></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button name="GUI" type="submit" required class="btn btn-success">GỬI</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 my-4">
                    <div class="wrapcontact">
						<div class="iFrameMap">
							<div id="contact_map" class="map">
								<iframe src="{{ asset ('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.904611732553!2d105.81388241542348!3d21.03650239288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIFNBUE8!5e0!3m2!1svi!2s!4v1555900531747!5m2!1svi!2s')}}" width="600" height="450" style="border:0" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection
