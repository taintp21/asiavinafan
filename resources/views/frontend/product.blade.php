@extends('frontend.layouts.app')

@section('web-title') {{strtoupper(str_replace("+"," ",Request::segment(2)))}} | {{$cateName->name}} @stop

@section('link-include')
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" type="text/css" media="all" property="stylesheet">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <script src="{{ url('slick/slick.min.js') }}" id="asiavina-slick-js"></script>
    <style>
        table{
            border: none;
        }
    </style>
@endsection
@section('body-class', 'class=single-product')
@section('content')
    <section class="product-cats">
        <div class="container">
            <div class="product-categories-carousel">
                @forelse ($categories as $r)
                    <div>
                        <div class="product-category-item" style="width: 100%; display: inline-block;">
                            <a href="{{ url('product-category/' . $r->slug) }}" tabindex="-1">
                                <div class="thumbnail">
                                    <img src="{{ $r->images }}">
                                </div>
                                <h2 class="title">{{ $r->name }}</h2>
                            </a>
                        </div>
                    </div>
                @empty
                    <p>No product</p>
                @endforelse
            </div>
        </div>
        <script src="{{ asset('js/product-categories-carousel.js') }}"></script>
    </section>

    <section class="product-detail">
        <h2 class="title-style-1  theme-normal">
            <span class="content">{{ $cateName->name }}</span>
        </h2>
        <div class="container">
            <article class="product">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col d-none d-md-block">
                        <div>
                            <h1 class="title">{{ strtoupper(str_replace("+"," ",$slug)) }}</h1>
                            <p></p>
                            <div class="su-heading su-heading-style-default su-heading-align-center" style="margin-bottom:20px">
                                <h4 style="color: #315377; font-weight: 300">TECHNICAL SPECIFICATIONS</h4>
                            </div>
                            <div id="technical_specifications">
                                {!! $product->technical_specifications !!}
                            </div>
                            <p>&nbsp;</p>
                            <h4 style="color: #315377; font-weight: 300">Featured</h4>
                            {!! $product->featured !!}
                            <p></p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col-right">
                            <div class="circle-container">
                                <div class="background"></div>
                                <div class="thumbnail">
                                    <img width="376" height="500" src="{{ $product->images }}" alt="{{$product->name}}">
                                </div>
                                <div class="metas">
                                    <div class="tags d-none d-md-block">
                                    </div>

                                    <div class="cat d-block">{{$cateName->name}}</div>
                                    <h1 class="title d-block">{{$product->name}}</h1>

                                    <div class="prices">
                                        <div class="cat d-block d-md-none">Price:</div>
                                        <div class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>{{number_format($product->price, 0, '', '.')}} VND</bdi>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="colors">
                                        <h3>Color<span class="cat d-inline-block d-md-none">:</span></h3>
                                        <div class="color" style="background: #000000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-block d-md-none mt-30">
                        <div class="tags"></div>
                    </div>
                    <div class="col d-block d-md-none mt-50">
                        <div>
                            <p></p>
                            <div class="su-heading su-heading-style-default su-heading-align-center" style="font-size:13px;margin-bottom:20px">
                                <h4>TECHNICAL SPECIFICATIONS</h4>
                            </div>
                            <div id="technical_specifications">
                                {!! $product->technical_specifications !!}
                            </div>
                            <p>&nbsp;</p>
                            <h4>Featured</h4>
                                {!! $product->featured !!}
                            <p></p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="related-products">
            <div class="container">
                <h4>Maybe you want to see more:</h4>

                <div class="related-products-carousel">
                    @foreach ($random10Products as $r)
                        <div>
                            <div class="related-products-item" style="width: 100%; display: inline-block;">
                                <a class="single-product-permalink" href="{{url('product/'.strtolower($r->name))}}">
                                    <article class="single-product-item">
                                        <h2 class="title">{{$r->name}}</h2>
                                        <div class="thumbnail">
                                            <img width="376" height="500" src="{{$r->images}}" alt="{{$r->name}}" loading="lazy">
                                        </div>
                                        <div class="btn btn-theme seemore">Information</div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <script>
                    jQuery('.related-products-carousel').slick({
                        infinite: true,
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        responsive: [{
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 3
                                }
                            },
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 2
                                }
                            }
                        ]
                    });
                </script>
            </div>
        </section>
        @if ($product->switch_height == 1 && $product->thermal_fuse_protection == 0)
        <script>
                $("#technical_specifications table tbody tr:first td:nth-child(3)").html('<i class="fa-solid fa-circle-check text-success"></i> Switch height');
        </script>
        @endif
        @if($product->switch_height == 0 && $product->thermal_fuse_protection == 1)
        <script>
            $("#technical_specifications table tbody tr:first td:nth-child(3)").html('<i class="fa-solid fa-circle-check text-success"></i> Thermal fuse protection');
        </script>
        @endif
        @if ($product->switch_height == 1 && $product->thermal_fuse_protection == 1)
        <script>
            $("#technical_specifications table tbody tr:first td:nth-child(3)").html('<i class="fa-solid fa-circle-check text-success"></i> Switch height');
            $("#technical_specifications table tbody tr:nth-child(2) td:nth-child(3)").html('<i class="fa-solid fa-circle-check text-success"></i> Thermal fuse protection');
        </script>
        @endif
@endsection

@section('custom-scripts')
    <script>
        document.querySelector("table").removeAttribute("border");
    </script>
@endsection
