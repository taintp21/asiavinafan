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

        <div class="products-slider-container" data-id="0">
            <div class="products-slider-prev"></div>
            <div class="products-slider-next"></div>

            <section class="products-slider">
                <input type="radio" name="slider0" data-slider-id="0" data-id="s1" id="product_slider_item_0_1" checked="">
                <input type="radio" name="slider0" data-slider-id="0" data-id="s2" id="product_slider_item_0_2">

                <label data-id="slide1" for="product_slider_item_0_1">
                    <article
                        class="product product-slider-item">
                        <div class="product-layout">
                            <div class="left-col">
                                <div class="category">
                                    <a href="https://quatvietnam.com.vn/product-category/ventilation-fan/">Ventilation
                                        Fan</a>
                                </div>

                                <h2 class="title">V04001-SV0</h2>
                                <a class="seemore btn btn-theme"
                                    href="https://quatvietnam.com.vn/product/v04001-sv0/">Information</a>
                            </div>

                            <div class="right-col thumbnail">
                                <img width="376" height="500"
                                    src="https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1.png"
                                    class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image"
                                    alt="V04001-SV0" loading="lazy"
                                    srcset="https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1.png 376w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1-226x300.png 226w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1-75x100.png 75w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1-150x200.png 150w"
                                    sizes="(max-width: 376px) 100vw, 376px">
                            </div>
                        </div>

                        <div class="background" style="font-size: 103.333px;">
                            <div>Ventilation Fan</div>
                        </div>
                    </article>
                </label>
                <label data-id="slide2" for="product_slider_item_0_2">
                    <article
                        class="product product-slider-item">
                        <div class="product-layout">
                            <div class="left-col">
                                <div class="category">
                                    <a href="https://quatvietnam.com.vn/product-category/ventilation-fan/">Ventilation
                                        Fan</a>
                                </div>

                                <h2 class="title">H08001-SV0</h2>
                                <a class="seemore btn btn-theme"
                                    href="https://quatvietnam.com.vn/product/h08001-sv0/">Information</a>
                            </div>

                            <div class="right-col thumbnail">
                                <img width="376" height="500"
                                    src="https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1.png"
                                    class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image"
                                    alt="H08001-SV0" loading="lazy"
                                    srcset="https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1.png 376w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1-226x300.png 226w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1-75x100.png 75w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1-150x200.png 150w"
                                    sizes="(max-width: 376px) 100vw, 376px">
                            </div>
                        </div>

                        <div class="background" style="font-size: 103.333px;">
                            <div>Ventilation Fan</div>
                        </div>
                    </article>
                </label>
            </section>

            <div class="products-slider-seemore">
                <!--


                    -->

                <a class="btn btn-outline-theme" href="https://quatvietnam.com.vn/product-category/ventilation-fan/">
                    List of Ventilation Fan <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <script>
                (function(slider_id, count) {
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
                })(0, 2);
            </script>
        </div>


        <div class="products-slider-container" data-id="1">
            <div class="products-slider-prev"></div>
            <div class="products-slider-next"></div>

            <section class="products-slider">
                <input type="radio" name="slider1" data-slider-id="1" data-id="s1" id="product_slider_item_1_1" checked="">

                <label data-id="slide1" for="product_slider_item_1_1">
                    <article
                        class="product product-slider-item">
                        <div class="product-layout">
                            <div class="left-col">
                                <div class="category">
                                    <a href="https://quatvietnam.com.vn/product-category/wall-fan/">Wall Fan</a>
                                </div>

                                <h2 class="title">L20002-DV0</h2>
                                <a class="seemore btn btn-theme"
                                    href="https://quatvietnam.com.vn/product/l20002-dv0/">Information</a>
                            </div>

                            <div class="right-col thumbnail">
                                <img width="376" height="500"
                                    src="https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0.png"
                                    class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image"
                                    alt="L20002-DV0" loading="lazy"
                                    srcset="https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0.png 376w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0-226x300.png 226w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0-75x100.png 75w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0-150x200.png 150w"
                                    sizes="(max-width: 376px) 100vw, 376px">
                            </div>
                        </div>

                        <div class="background" style="font-size: 103.333px;">
                            <div>Wall Fan</div>
                        </div>
                    </article>
                </label>
            </section>

            <div class="products-slider-seemore">
                <!--


                    -->

                <a class="btn btn-outline-theme" href="https://quatvietnam.com.vn/product-category/wall-fan/">
                    List of Wall Fan <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <script>
                (function(slider_id, count) {
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
                })(1, 1);
            </script>
        </div>

    </section>
@endsection
