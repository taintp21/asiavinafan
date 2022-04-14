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
                                    <img src="{{ url('img/stand_fan.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="text-center fw-bold">
                                    Stand Fans
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
                <h1 class="text-center fw-light mb-5" style="color: #315377">STAND FANS</h1>
            </div>
            <div class="col-12 mb-5">
                <div class="row align-items-center">
                    <div class="col-3 mx-auto" style="background-color: #EAEDEF; width: 400px; padding: 25px; margin: 5px;">
                        <div class="text-center">
                            <h3 class="fw-bold">ASIAvina D16028 (White)</h3>
                            <img src="{{ url('img/asiavina-d16028.png') }}" class="rounded mx-auto d-block w-50" alt="...">
                        </div>
                    </div>
                    <div class="col-3 mx-auto" style="background-color: #EAEDEF; width: 400px; padding: 25px; margin: 5px;">
                        <div class="text-center">
                            <h3 class="fw-bold">ASIAvina D16028 (White)</h3>
                            <img src="{{ url('img/asiavina-d16028.png') }}" class="rounded mx-auto d-block w-50" alt="...">
                        </div>
                    </div>
                    <div class="col-3 mx-auto" style="background-color: #EAEDEF; width: 400px; padding: 25px; margin: 5px;">
                        <div class="text-center">
                            <h3 class="fw-bold">ASIAvina D16028 (White)</h3>
                            <img src="{{ url('img/asiavina-d16028.png') }}" class="rounded mx-auto d-block w-50" alt="...">
                        </div>
                    </div>
                    <div class="col-3 mx-auto" style="background-color: #EAEDEF; width: 400px; padding: 25px; margin: 5px;">
                        <div class="text-center">
                            <h3 class="fw-bold">ASIAvina D16028 (White)</h3>
                            <img src="{{ url('img/asiavina-d16028.png') }}" class="rounded mx-auto d-block w-50" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
