@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="title-style-1" style="color: #315377">AGENTS</h2>
            <h2 class="title-style-2"><span class="content">Retailers of ASIAVina</span></h2>
        </div>
        <section class="retailers">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col">
                        <article class="retailer type-retailer status-publish hentry">
                            <h2 class="title">Home &amp; Cook Thảo Mộc Việt</h2>
                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>12 Võ Văn Kiệt, Quận 1, Tp. HCM</span>
                            </p>
                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>(028)39154342</span>
                            </p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="retailer type-retailer status-publish hentry">
                            <h2 class="title">Home &amp; Cook Hoàng Long</h2>
                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>374 Lê Hồng Phong, Bình Dương</span>
                            </p>
                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>(028)38305136</span>
                            </p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="retailer type-retailer status-publish hentry">
                            <h2 class="title">Home &amp; Cook Thiên Phước</h2>
                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>844 Trường Chinh, Phường 15, Quận Tân Bình, Tp. HCM</span>
                            </p>
                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>(028) 38153496</span>
                            </p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="retailer type-retailer status-publish hentry">
                            <h2 class="title">Home &amp; Cook Kiệt Phúc</h2>
                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>84 Quốc lộ 1K, Phường Linh Xuân, Tp. Thủ Đức</span>
                            </p>
                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>(028) 37246757</span>
                            </p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="retailer type-retailer status-publish hentry">
                            <h2 class="title">Home &amp; Cook Chinh Bắc</h2>

                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>133 Kinh Dương Vương, Phường 13, Quận 6, Tp. HCM</span>
                            </p>
                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>089 932 3639</span>
                            </p>
                        </article>
                    </div>
                    <div class="col">
                        <article class="retailer type-retailer status-publish hentry">
                            <h2 class="title">Home &amp; Cook Quang Minh</h2>
                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>25 Nguyễn Thị Nhỏ, Phường 9, Quận Tân Bình, Tp. HCM</span>
                            </p>
                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>(028) 38651811</span>
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center" style="background-color: #EEF3F8;">
            <h1 class="fw-light p-4" style="color: #315377">OUR PARTNERS</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 m-auto mb-3">
                        <div class="image" style="background-color: #4677AB;">
                            <img src="{{ url('img/coopmart.png') }}" class="w-50" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
