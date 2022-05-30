@extends('frontend.layouts.app')

@section('web-title','Asiavina Fans')

@section('link-include')
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" property="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" type="text/css" media="all" property="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <style id="metaslider-public-inline-css" type="text/css">
        #metaslider_165.flexslider .slides li {
            margin-right: 5px !important;
        }

    </style>
    <script src="{{ url('js/slick.min.js') }}" id="asiavina-slick-js"></script>
@endsection
@section('content')
    <section class="product-cats">
        <div class="container">
            <div class="product-categories-carousel">
                @forelse ($categories as $r)
                    <div>
                        <div class="product-category-item" style="width: 100%; display: inline-block;">
                            <a href="{{url('product-category/'.$r->slug)}}" tabindex="-1">
                                <div class="thumbnail">
                                    <img src="{{$r->images}}">
                                </div>
                                <h2 class="title">{{$r->name}}</h2>
                            </a>
                        </div>
                    </div>
                @empty
                    <p>No data</p>
                @endforelse
            </div>
        </div>
        <script src="{{asset('js/product-categories-carousel.js')}}"></script>
    </section>

    <section class="all-products">

        <h2 class="title-style-1  theme-normal">
            <span class="content">All Products</span>
        </h2>
        @php
            $slider_count = 0;
            $data_id = 0;
            $id1 = 1;
            $id2 = 1;
        @endphp
        @foreach ($categories as $r)
            @if (DB::table("products")->where("cateId","=",$r->id)->count() > 0)
                <div class="products-slider-container" data-id={{$slider_count}}>
                    <div class="products-slider-prev"></div>
                    <div class="products-slider-next"></div>

                    <section class="products-slider">

                        @foreach ($products as $product)
                            @if ($product->cateId == $r->id)
                                <input type="radio" name="slider{{$slider_count}}" data-slider-id="{{$slider_count}}" data-id="s{{$id1}}" id="product_slider_item_{{$slider_count}}_{{$id1}}">
                                @php $id1++; @endphp
                            @endif
                        @endforeach
                        <script>$("input#product_slider_item_{{$slider_count}}_1").attr("checked", "checked");</script>
                        @foreach ($products as $product)
                            @if ($product->cateId == $r->id)
                            <label data-id="slide{{$id2}}" for="product_slider_item_{{$slider_count}}_{{$id2}}">
                                <article class="product-slider-item">
                                    <div class="product-layout">
                                        <div class="left-col">
                                            <div class="category">
                                                <a href="{{ url('product-category/'.$r->slug) }}">{{$r->name}}</a>
                                            </div>
                                            <h2 class="title">{{str_replace("+"," ",$product->name)}}</h2>
                                            <a class="seemore btn btn-theme"
                                                href="{{ url('product/'.$product->name) }}">Information</a>
                                        </div>

                                        <div class="right-col thumbnail">
                                            <img width="376" height="500" src="{{$product->images}}" alt="V04001-SV0" loading="lazy">
                                        </div>
                                    </div>

                                    <div class="background" style="font-size: 103.333px;">
                                        <div>{{$r->name}}</div>
                                    </div>
                                </article>
                            </label>
                            @php $id2++; @endphp
                            @endif
                        @endforeach
                    </section>
                    @php $slider_count++; $data_id++; @endphp
                    <div class="products-slider-seemore">
                        <a class="btn btn-outline-theme" href="{{ url('product-category/'.$r->slug) }}">
                            List of {{$r->name}} <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <script>
                    function slider(slider_id) {
                        var ele = jQuery('.products-slider-container[data-id=' + slider_id + ']');

                        ele.find('.background').fitText(0.6);

                        ele.find('.products-slider-prev').click(function() {
                            var r = ele.find('input:checked').prev();
                            if (!r.is('[type=radio]')) r = ele.find('[type=radio]').last();
                            r.prop("checked", true);
                        });

                        ele.find('.products-slider-next').click(function() {
                            var r = ele.find('input:checked').next();
                            if (!r.is('[type=radio]')) r = ele.find('[type=radio]').first();
                            r.prop("checked", true);
                        });
                    };
                    slider({{$slider_count-1}});
                </script>
                @php $id1 = 1; $id2 = 1; $data_id = 0; @endphp
            @endif
        @endforeach
    </section>
@endsection
