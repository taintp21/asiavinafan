@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="title-style-1  theme-normal">
        <span class="content">Customer Service</span>
    </h2>
    <div class="mt-100 d-none d-lg-block"></div>
    <section class="topics">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-5">
                <div class="col d-none d-lg-flex"></div>
                <div class="col mb-20">
                    <a class="topic d-flex d-lg-block" href="{{url('warranty-policy')}}">
                        <div class="thumbnail">
                            <img src="{{url('img/cs-warranty.png')}}" alt="Warranty">
                        </div>

                        <div>
                            <h3 class="title">Warranty Policy</h3>
                            <p>Learn more about waranty policy.</p>
                        </div>
                    </a>
                </div>
                <div class="col mb-20">
                    <a class="topic d-flex d-lg-block" href="{{url('exchange-policy')}}">
                        <div class="thumbnail">
                            <img src="{{url('img/cs-exchange.png')}}" alt="Exchange Policy">
                        </div>

                        <div>
                            <h3 class="title">Exchange Policy</h3>
                            <p>Learn more about exchange policy.</p>
                        </div>
                    </a>
                </div>
                <div class="col mb-20">
                    <a class="topic d-flex d-lg-block" href="{{url('usage-tips')}}">
                        <div class="thumbnail">
                            <img src="{{url('img/cs-usage-tips.png')}}" alt="Usage Tips">
                        </div>

                        <div>
                            <h3 class="title">Usage Tips</h3>
                            <p>Learn more about usage tips.</p>
                        </div>
                    </a>
                </div>
                <div class="col d-none d-lg-flex"></div>
            </div>
        </div>
    </section>
    <div class="text-center">
        <h2 class="title-style-2">
            <span class="content">Find an Authorized service partner nearest you</span>
        </h2>
    </div>
    <div class="service-partners-finder w-75 mx-auto">
        <div class="row d-none d-md-flex">
            <div class="col-5">
                <i class="fa-solid fa-location-dot"></i>
                <select class="custom-select cities">
                    <option selected="">Choose Province/ City</option>
                    <option value="An Giang">An Giang</option>
                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                    <option value="Bình Dương">Bình Dương</option>
                    <option value="Bình Thuận">Bình Thuận</option>
                    <option value="Bình Định">Bình Định</option>
                    <option value="Bạc Liêu">Bạc Liêu</option>
                    <option value="Bắc Giang">Bắc Giang</option>
                    <option value="Bắc Ninh">Bắc Ninh</option>
                    <option value="Bến Tre">Bến Tre</option>
                    <option value="Cà Mau">Cà Mau</option>
                    <option value="Cần Thơ">Cần Thơ</option>
                    <option value="Gia Lai">Gia Lai</option>
                    <option value="Huế">Huế</option>
                    <option value="Hà Nam">Hà Nam</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                    <option value="Hải Dương">Hải Dương</option>
                    <option value="Hải Phòng">Hải Phòng</option>
                    <option value="Hậu Giang">Hậu Giang</option>
                    <option value="Khánh Hòa">Khánh Hòa</option>
                    <option value="Kiên Giang">Kiên Giang</option>
                    <option value="Long An">Long An</option>
                    <option value="Lâm Đồng">Lâm Đồng</option>
                    <option value="Nam Định">Nam Định</option>
                    <option value="Nghệ An">Nghệ An</option>
                    <option value="Ninh Bình">Ninh Bình</option>
                    <option value="Ninh Thuận">Ninh Thuận</option>
                    <option value="Phú Thọ">Phú Thọ</option>
                    <option value="Phú Yên">Phú Yên</option>
                    <option value="Quảng Bình">Quảng Bình</option>
                    <option value="Quảng Nam">Quảng Nam</option>
                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                    <option value="Quảng Ninh">Quảng Ninh</option>
                    <option value="Quảng Trị">Quảng Trị</option>
                    <option value="Sóc Trăng">Sóc Trăng</option>
                    <option value="Thanh Hóa">Thanh Hóa</option>
                    <option value="Thái Bình">Thái Bình</option>
                    <option value="Thái Nguyên">Thái Nguyên</option>
                    <option value="Tiền Giang">Tiền Giang</option>
                    <option value="Tp HCM">Tp HCM</option>
                    <option value="Trà Vinh">Trà Vinh</option>
                    <option value="Tuyên Quang">Tuyên Quang</option>
                    <option value="Tây Ninh">Tây Ninh</option>
                    <option value="Vĩnh Long">Vĩnh Long</option>
                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Đăk Lăk">Đăk Lăk</option>
                    <option value="Đăk Nông">Đăk Nông</option>
                    <option value="Đồng Nai">Đồng Nai</option>
                    <option value="Đồng Tháp">Đồng Tháp</option>
                </select>
            </div>
            <div class="col-5">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Enter Street, Ward, District" class="filter">
            </div>
            <div class="col-2">
                <button class="btn btn-theme fl-r">Search</button>
            </div>
        </div>
    </div>
    <div class="row my-5 mx-auto col-10">
        <div class="col-6">
            <div class="card commitment-item" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3 align-middle">
                        <img src="{{ url('img/warranty.png') }}" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h6 class="fw-bold">24 months warranty</h6>
                            <p class="text-muted">With 58 customer service centers across the country, ASIAvina is glad to support
                                customers whenever in need. For more information about the service centers: <br> <a
                                    href="" class="text-decoration-none">Please click here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card commitment-item" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ url('img/quality-commitment.png') }}" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h6 class="fw-bold">Quality commitment</h6>
                            <p class="text-muted">ASIAvina commits to provide only the best-quality electrical fans, in order to
                                give ultimate customer satisfaction with innovative features. For more information:<br> <a href="" class="text-decoration-none">Please click here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="hotline">
    <div class="hotline-container">
        <p class="mb-0">Please call the hotline <span class="phone fs-30 ml-10">1800-555-521</span></p>
        <p>or contact our Authorized Service Partner for further assistance.</p>
    </div>
</section>
@endsection
