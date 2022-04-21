@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mb-5 m-auto">
                <div id="carouselMain" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="item">
                                <div class="img-wrapper" style="background-color: #F5F6F7">
                                    <img src="{{ url('img/B12001-510x327.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Desk Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/slide_fan.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Slide Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <a href="/product-category/stand-fan"><img src="{{ url('img/stand_fan.png') }}" class="d-block w-100" alt="..."></a>
                                </div>
                                <div class="text-center fw-bold">
                                    <a href="/product-category/stand-fan" class="text-decoration-none text-dark">Stand Fans</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/wall_fan.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Wall Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/box_fan.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Box Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/ceiling_fan.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Ceiling Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/ventilation_fan.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Ventilation Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/B12001-510x327.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Desk Fans
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="img-wrapper">
                                    <img src="{{ url('img/B12001-510x327.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Desk Fans
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div id="carouselBg" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselBg" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselBg" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselBg" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('img/carousel/b-quatvietnam-3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('img/carousel/b-quatvietnam-3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('img/carousel/b-quatvietnam-3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBg" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBg" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-8 mt-5 mb-5 m-auto row">
                <div class="col-6">
                    <div class="card commitment-item" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ url('img/warranty.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="fw-bold p-0 m-0">24 months warranty</p>
                                    <small>With 58 customer service centers across the country, ASIAvina is glad to support
                                        customers whenever in need. For more information about the service centers: <br> <a
                                            href="" class="text-decoration-none">Please click here</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card commitment-item" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ url('img/quality-commitment.png') }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="fw-bold p-0 m-0">Quality commitment</p>
                                    <small>ASIAvina commits to provide only the best-quality electrical fans, in order to
                                        give ultimate customer satisfaction with innovative features. For more
                                        information:<br> <a href="" class="text-decoration-none">Please click
                                            here</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 mb-5">
                <h1 class="text-center fw-light mb-5" style="color: #315377">PRODUCTS</h1>
                <ul class="nav nav-pills mb-3 justify-content-center nav-products" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Best-selling Products</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">New Products</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Popular Products</button>
                    </li>
                </ul>
                <div class="tab-content m-auto" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="fan row align-items-center vh-100">
                            <div class="col-8 mx-auto">
                                <div class="card m-auto w-100 border-0 p-5">
                                    <div class="row g-0 m-auto">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h3 style="color: #4677AB;">Stand Fan</h3>
                                                <h3 class="fw-bold">ASIAvina D16028 (White)</h3>
                                                <button class="btn btn-primary">Information</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-list">
                                    <button class="btn btn-outline-primary">More Products <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 mb-5">
                <div class="container text-center">
                    <h1 class="fw-light mb-5" style="color: #315377">PRODUCT REGISTRATION</h1>
                    <p>Please register information to participate in the lucky draw event!</p>
                    <form action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-product-type">
                                <img src="{{url('img/icon/register-type.svg')}}" width="16" height="16" style="object-fit:contain">
                            </span>
                            <input type="text" class="form-control" placeholder="Product Type">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-serial-number">
                                <img src="{{url('img/icon/register-serial.svg')}}" width="16" height="16" style="object-fit:contain">
                            </span>
                            <input type="text" class="form-control" placeholder="Serial Number">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-your-name">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-address">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-phone-number">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-your-email">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="input-buy-date">
                                <i class="fa-solid fa-calendar-days"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Buy Date">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 mt-3 mb-5">
                <div class="row row-cols-1 row-cols-md-5 g-4 container m-auto">
                    <div class="col">
                        <div class="card">
                            <div class="text-center pt-4">
                                <img src="{{url('img/store.png')}}" class="card-img-top" alt="..." style="max-width: 100px; max-height: 100px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Store</h5>
                                <p class="card-text">Distributors of ASIAvina across the country.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="text-center pt-4">
                                <img src="{{url('img/customer.png')}}" class="card-img-top" alt="..." style="max-width: 100px; max-height: 100px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Customer Service</h5>
                                <p class="card-text">Find an authorized service partner nearest you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="text-center pt-4">
                                <img src="{{url('img/promote.png')}}" class="card-img-top" alt="..." style="max-width: 100px; max-height: 100px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Promotion</h5>
                                <p class="card-text">Learn more about news and promotion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="text-center pt-4">
                                <img src="{{url('img/about-us.png')}}" class="card-img-top" alt="..." style="max-width: 100px; max-height: 100px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">About Us</h5>
                                <p class="card-text">History and information about us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="text-center pt-4">
                                <img src="{{url('img/contact.png')}}" class="card-img-top" alt="..." style="max-width: 100px; max-height: 100px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Contact Us</h5>
                                <p class="card-text">Our advisors are at your service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        var multipleCardCarousel = document.querySelector("#carouselMain");
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;
            $("#carouselMain .carousel-control-next").on("click", function() {
                if (scrollPosition < carouselWidth - cardWidth * 4) {
                    scrollPosition += cardWidth;
                    $("#carouselMain .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        300
                    );
                }
            });
            $("#carouselMain .carousel-control-prev").on("click", function() {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $("#carouselMain .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        300
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>
@endsection
