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
            <div class="mt-5">
                <h1 class="text-center fw-light mb-5" style="color: #315377">ALL PRODUCTS</h1>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="fan row align-items-center">
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
                                    <img src="{{ url('img/asiavina-d16028.png') }}" class="img-fluid w-50" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-outline-primary">List of Stand Fans <i class="fa-solid fa-arrow-right"></i></button>
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
