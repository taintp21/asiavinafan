@extends('frontend.layouts.app')
@section('web-title','Home')

@section('link-include')
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" property="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" type="text/css" media="all" property="stylesheet">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <style id="metaslider-public-inline-css" type="text/css">
        #metaslider_165.flexslider .slides li {
            margin-right: 5px !important;
        }
    </style>
    <script src="{{ asset("js/slick.min.js")}}"></script>
    <script src="{{asset("js/sweetalert2@11.js")}}"></script>
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
                    <p>No product</p>
                @endforelse
            </div>
        </div>
        <script src="{{asset('js/product-categories-carousel.js')}}"></script>
    </section>

    <section class="home-slider">
        <div class="d-none d-md-block">
            <div id="metaslider-id-43" style="width: 100%;"
                class="ml-slider-3-19-1 metaslider metaslider-flex metaslider-43 ml-slider">
                <div id="metaslider_container_43">
                    <div id="metaslider" class="flexslider">
                        <ul class="slides">
                            @forelse ($sliders as $r)
                                <li>
                                    <img src="{{$r->images}}" height="787" width="1920" title="{{$r->title}}" draggable="false">
                                </li>
                            @empty
                                <p>No Data</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="commitments">
        <div class="container">
            <div class="commitment-medals row row-cols-1 row-cols-lg-2">
                <div class="col mb-20">
                    <div class="commitment-item">
                        <div class="row">
                            <div class="thumbnail col">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652080703/warranty_fblqqu.png"
                                    alt="Warranty">
                            </div>

                            <div class="content col-8">
                                <h3>24 months warranty</h3>
                                <p class="mb-0">With 58 customer service centers across the country, ASIAvina is
                                    glad to support customers whenever in need. For more information about the service
                                    centers:
                                </p>
                                <p>
                                    <a class="seemore" href="{{url('exchange-policy')}}">Please click here.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-20">
                    <div class="commitment-item">
                        <div class="row">
                            <div class="thumbnail col">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652080735/quality-commitment_nrzdsi.png"
                                    alt="Quality Commitment">
                            </div>

                            <div class="content col-8">
                                <h3>Quality commitment</h3>
                                <p class="mb-0">ASIAvina commits to provide only the best-quality electrical
                                    fans, in order to give ultimate customer satisfaction with innovative features. For more
                                    information:</p>
                                <p>
                                    <a class="seemore" href="{{url('about-us')}}">Please click here.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-100 d-none d-lg-block"></div>
    </section>

    <section class="products">

        <h2 class="title-style-1  theme-normal">
            <span class="content">Products</span>
        </h2>
        <div class="product-topics-container">
            <ul class="product-topics d-none d-md-block">
                <li data-target="best-selling" class="active">
                    <span>Best-selling Products</span>
                </li>
                <li data-target="new">
                    <span>New Products<span>
                </li>
                <li data-target="popular">
                    <span>Popular Products<span>
                </li>
            </ul>
            <div class="product-topics-item" data-id="best-selling" style="display: block;">

                <div class="products-slider-container" data-id="1">
                    <section class="products-slider">
                        <input type="radio" name="slider1" data-slider-id="1" data-id="s1" id="product_slider_item_1_1"
                            checked="">
                        <input type="radio" name="slider1" data-slider-id="1" data-id="s2" id="product_slider_item_1_2">
                        <input type="radio" name="slider1" data-slider-id="1" data-id="s3" id="product_slider_item_1_3">

                        <label data-id="slide1" for="product_slider_item_1_1">
                            <article class="product product-slider-item first">
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

                                <div class="background" style="font-size: 0px;">
                                    <div>Ventilation Fan</div>
                                </div>
                            </article>
                        </label>
                        <label data-id="slide2" for="product_slider_item_1_2">
                            <article class="product product-slider-item">
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

                                <div class="background" style="font-size: 0px;">
                                    <div>Ventilation Fan</div>
                                </div>
                            </article>
                        </label>
                        <label data-id="slide3" for="product_slider_item_1_3">
                            <article class="product product-slider-item">
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
                                <div class="background" style="font-size: 0px;">
                                    <div>Wall Fan</div>
                                </div>
                            </article>
                        </label>
                    </section>
                    <div class="products-slider-seemore">
                        <a class="btn btn-outline-theme" href="{{url('shop')}}">
                            More Products
                            <i class="fa-solid fa-arrow-right"></i>
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
                        })(1, 3);
                    </script>
                </div>

            </div>
            <div class="product-topics-item" data-id="new" style="display: none;">
                abc
            </div>

            <div class="product-topics-item" data-id="popular" style="display: none;">
            </div>

            <script>
                jQuery('.product-topics-container .product-topics-item').hide();
                jQuery('.product-topics-container .product-topics-item').first().show();

                jQuery('.product-topics-container li').click(function() {
                    if (jQuery(this).hasClass('active')) return;

                    jQuery('.product-topics-container li').removeClass('active');
                    var target = jQuery(this).addClass('active').attr('data-target');

                    jQuery('.product-topics-container .product-topics-item').hide();
                    jQuery('[data-id=' + target + ']').fadeIn(500);

                    setTimeout(() => jQuery(window).trigger('resize'), 100);
                });
            </script>
        </div>
    </section>

    <section class="product-registration" id="product-registration">
        <div class="container">

            <h2 class="title-style-1  theme-normal">
                <span class="content">Product Registration</span>
            </h2>
            <div class="ta-c c-theme fs-15">Please register information to participate in the lucky draw event!</div>

            <form class="mt-50 mb-100" method="POST" action="{{route('product_registration.store')}}">
                @csrf
                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-product_type">Product Type</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('product_type')border-danger @enderror">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652673326/register-type_yzqw0d.svg" width="16" height="16" style="object-fit:contain">
                            </div>
                        </div>

                        <select class="form-control placeholder @error('product_type')border-danger @enderror" name="product_type" id="input-product_type">
                            <option value="" disabled selected>Product Type</option>
                            <option value="VY377990">VY377990</option>
                            <option value="VY357690">VY357690</option>
                            <option value="VY538790">VY538790</option>
                            <option value="VY358990">VY358990</option>
                            <option value="VY449690">VY449690</option>
                            <option value="VY636790">VY636790</option>
                            <option value="VY639990">VY639990</option>
                            <option value="VY377790">VY377790</option>
                            <option value="VY538990">VY538990</option>
                            <option value="VY539790">VY539790</option>
                            <option value="VY577890">VY577890</option>
                            <option value="VY557890">VY557890</option>
                            <option value="VY377290">VY377290</option>
                            <option value="VY377090">VY377090</option>
                            <option value="VY357790">VY357790</option>
                            <option value="VY357290">VY357290</option>
                            <option value="VY355790">VY355790</option>
                            <option value="VY538890">VY538890</option>
                            <option value="VY358790">VY358790</option>
                            <option value="VY358190">VY358190</option>
                            <option value="VY579890">VY579890</option>
                            <option value="VY559790">VY559790</option>
                            <option value="VY559890">VY559890</option>
                            <option value="VY637890">VY637890</option>
                            <option value="VY636890">VY636890</option>
                            <option value="VY638890">VY638890</option>
                            <option value="VY639890">VY639890</option>
                            <option value="VY377190">VY377190</option>
                            <option value="VY357190">VY357190</option>
                            <option value="VY358290">VY358290</option>
                            <option value="VY579790">VY579790</option>
                            <option value="VY639790">VY639790</option>
                            <option value="STB1601">STB1601</option>
                            <option value="LTB1601">LTB1601</option>
                            <option value="DTB1601">DTB1601</option>
                            <option value="ATB1601">ATB1601</option>
                            <option value="D16028">D16028</option>
                            <option value="D16027">D16027</option>
                            <option value="D16026">D16026</option>
                            <option value="D16025">D16025</option>
                            <option value="D16024">D16024</option>
                            <option value="D16023">D16023</option>
                            <option value="D16022">D16022</option>
                            <option value="D16021">D16021</option>
                            <option value="L16023">L16023</option>
                            <option value="L16022">L16022</option>
                            <option value="L16021">L16021</option>
                            <option value="L16020">L16020</option>
                            <option value="L16019">L16019</option>
                            <option value="L16018">L16018</option>
                            <option value="D16020">D16020</option>
                            <option value="D16019">D16019</option>
                            <option value="D16018">D16018</option>
                            <option value="A16021">A16021</option>
                            <option value="A16020">A16020</option>
                            <option value="A16019">A16019</option>
                            <option value="A16018">A16018</option>
                            <option value="L16011">L16011</option>
                            <option value="J56001">J56001</option>
                            <option value="J48002">J48002</option>
                            <option value="D16006">D16006</option>
                            <option value="D16004">D16004</option>
                            <option value="D16003">D16003</option>
                            <option value="D16002">D16002</option>
                            <option value="D16001">D16001</option>
                            <option value="D16000">D16000</option>
                            <option value="B12003">B12003</option>
                            <option value="B12002">B12002</option>
                            <option value="B06002">B06002</option>
                            <option value="L18003">L18003</option>
                            <option value="A16004">A16004</option>
                            <option value="L16005">L16005</option>
                            <option value="L16004">L16004</option>
                            <option value="L16001">L16001</option>
                            <option value="B08003">B08003</option>
                            <option value="DS001">DS001</option>
                            <option value="J56002">J56002</option>
                            <option value="L20001">L20001</option>
                            <option value="F06001">F06001</option>
                            <option value="F04001">F04001</option>
                            <option value="D20001">D20001</option>
                            <option value="L16008">L16008</option>
                            <option value="A16006">A16006</option>
                            <option value="J48003">J48003</option>
                            <option value="V04001">V04001</option>
                            <option value="A16003">A16003</option>
                            <option value="HF1401">HF1401</option>
                            <option value="D16008">D16008</option>
                            <option value="A16010">A16010</option>
                            <option value="H10001">H10001</option>
                            <option value="J48004">J48004</option>
                            <option value="J56004">J56004</option>
                            <option value="B16002">B16002</option>
                            <option value="H08001">H08001</option>
                            <option value="A16002">A16002</option>
                            <option value="D16017">D16017</option>
                            <option value="A16011">A16011</option>
                            <option value="B16003">B16003</option>
                            <option value="D16005">D16005</option>
                            <option value="A16017">A16017</option>
                            <option value="D16015">D16015</option>
                            <option value="L16002">L16002</option>
                            <option value="D16016">D16016</option>
                            <option value="D24001">D24001</option>
                            <option value="D18002">D18002</option>
                            <option value="B12001">B12001</option>
                            <option value="A16009">A16009</option>
                            <option value="F12004">F12004</option>
                            <option value="L24001">L24001</option>
                            <option value="B16017">B16017</option>
                            <option value="B08002">B08002</option>
                            <option value="A16001">A16001</option>
                            <option value="A16007">A16007</option>
                            <option value="F16001">F16001</option>
                            <option value="D16011">D16011</option>
                            <option value="D20002">D20002</option>
                            <option value="X16001">X16001</option>
                            <option value="B12005">B12005</option>
                            <option value="D18001">D18001</option>
                            <option value="D16010">D16010</option>
                            <option value="A16008">A16008</option>
                            <option value="L18002">L18002</option>
                            <option value="L16013">L16013</option>
                            <option value="L16009">L16009</option>
                            <option value="L20002">L20002</option>
                            <option value="L16003">L16003</option>
                            <option value="F12001">F12001</option>
                            <option value="L18001">L18001</option>
                            <option value="D16013">D16013</option>
                            <option value="D18003">D18003</option>
                            <option value="D16012">D16012</option>
                            <option value="L16012">L16012</option>
                            <option value="L16010">L16010</option>
                            <option value="L16006">L16006</option>
                            <option value="B16001">B16001</option>
                            <option value="B12004">B12004</option>
                            <option value="L16017">L16017</option>
                            <option value="X16002">X16002</option>
                            <option value="L18004">L18004</option>
                            <option value="A18001">A18001</option>
                            <option value="D16009">D16009</option>
                            <option value="D18005">D18005</option>
                            <option value="F16002">F16002</option>
                            <option value="QS1001">QS1001</option>
                            <option value="B18001">B18001</option>
                            <option value="L16015">L16015</option>
                            <option value="J56003">J56003</option>
                            <option value="T20004">T20004</option>
                            <option value="A16012">A16012</option>
                            <option value="D18004">D18004</option>
                        </select>
                    </div>
                    @error('product_type') <p class="text-danger">{{$message}}</p> @enderror
                </div>


                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-serial_number">Serial Number</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('serial_number') border-danger @enderror">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652673596/register-serial_ndlpa9.svg"
                                    width="16" height="16" style="object-fit:contain">
                            </div>
                        </div>
                        <input type="text" name="serial_number" class="form-control @error('serial_number') border-danger @enderror" id="input-serial_number" placeholder="Serial Number" value="{{old('serial_number')}}">
                    </div>
                    @error('serial_number') <p class="text-danger">{{$message}}</p> @enderror
                </div>


                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-name">Your Name</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('name') border-danger @enderror">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>

                        <input type="text" name="name" class="form-control @error('name') border-danger @enderror" id="input-name" placeholder="Your Name" value="{{old('name')}}">
                    </div>
                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                </div>


                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-address">Address</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('address') border-danger @enderror">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>

                        <input type="text" name="address" class="form-control @error('address') border-danger @enderror" id="input-address" placeholder="Address" value="{{old('address')}}">
                    </div>
                    @error('address') <p class="text-danger">{{$message}}</p> @enderror
                </div>


                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-phone">Phone Number</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('phone_number') border-danger @enderror">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>

                        <input type="number" name="phone_number" class="form-control @error('phone_number') border-danger @enderror" id="input-phone" placeholder="Phone Number" value="{{old('phone_number')}}">
                    </div>
                    @error('phone_number') <p class="text-danger">{{$message}}</p> @enderror
                </div>


                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-email">Your Email</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('email') border-danger @enderror">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>

                        <input type="text" name="email" class="form-control @error('email') border-danger @enderror" id="input-email" placeholder="Your Email" value="{{old('email')}}">
                    </div>
                    @error('email') <p class="text-danger">{{$message}}</p> @enderror
                </div>


                <div class="col-auto mb-20">
                    <label class="sr-only" for="input-buy_date">Buy Date</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text @error('buy_date') border-danger @enderror">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                        </div>
                        <input type="text" onfocus="(this.type='date')" name="buy_date" class="form-control @error('buy_date') border-danger @enderror" id="input-buy_date" placeholder="Buy Date" value="{{old('buy_date')}}">
                    </div>
                    @error('buy_date') <p class="text-danger">{{$message}}</p> @enderror
                </div>

                <p class="ta-c mt-50">
                    <button type="submit" class="btn btn-theme" id="submit">Send</button>
                </p>
            </form>
        </div>
    </section>
    @if(session('success'))
        <script>
            $(document).ready(function(){
                $('html, body').animate({
                    scrollTop: $("#product-registration").offset().top
                }, 500);
                Swal.fire({
                    icon: 'success',
                    title: 'Your work has been saved',
                });
            })
        </script>
    @endif
    @if($errors->first("product_type") || $errors->first("serial_number") || $errors->first("name") || $errors->first("address") || $errors->first("phone_number") || $errors->first("email") || $errors->first("buy_date"))
        <script>
            $(document).ready(function(){
                $('html, body').animate({
                    scrollTop: $("#product-registration").offset().top
                }, 500);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                });
            })
        </script>
    @endif
    <div class="d-none d-lg-block mb-50">&nbsp;</div>
    <section class="topics">
        <div class="container">
            <div class="topics">
                <div class="row row-cols-1 row-cols-lg-5">
                    <div class="col mb-20">
                        <a class="topic d-flex d-lg-block" href="{{url('agents')}}">
                            <div class="thumbnail">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652080524/store_ytonen.png"
                                    alt="Store">
                            </div>

                            <div>
                                <h3 class="title">Store</h3>
                                <p>Distributors of ASIAvina across the country.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-20">
                        <a class="topic d-flex d-lg-block" href="{{url('customer-service')}}">
                            <div class="thumbnail">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652079581/w-service-receptionist_r6jehe.png"
                                    alt="Customer service">
                            </div>
                            <div>
                                <h3 class="title">Customer service</h3>
                                <p>Find an authorized service partner nearest you.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-20">
                        <a class="topic d-flex d-lg-block" href="{{url('promotion')}}">
                            <div class="thumbnail">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652080557/promote_deuoa4.png"
                                    alt="Promotion">
                            </div>

                            <div>
                                <h3 class="title">Promotion</h3>
                                <p>Learn more about news and promotion.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-20">
                        <a class="topic d-flex d-lg-block" href="{{url('about-us')}}">
                            <div class="thumbnail">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652080588/about-us_tvvhjc.png"
                                    alt="About us">
                            </div>
                            <div>
                                <h3 class="title">About us</h3>
                                <p>History and information about us.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-20">
                        <a class="topic d-flex d-lg-block" href="{{url('contact-us')}}">
                            <div class="thumbnail">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652080610/contact_d2n8dy.png"
                                    alt="Contact us">
                            </div>
                            <div>
                                <h3 class="title">Contact us</h3>
                                <p>Our advisors are at your service.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-scripts')
    <script type="text/javascript" src="{{ url('js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript" id="metaslider-flex-slider-js-after">
        var metaslider = function($) {
            $('#metaslider').addClass('flexslider');
            $('#metaslider').flexslider({
                slideshowSpeed: 3000,
                animation: "fade",
                controlNav: true,
                directionNav: true,
                pauseOnHover: true,
                direction: "horizontal",
                reverse: false,
                animationSpeed: 600,
                prevText: "Previous",
                nextText: "Next",
                fadeFirstSlide: false,
                slideshow: true
            });
            $(document).trigger('metaslider/initialized', '#metaslider');
        };
        var timer_metaslider = function() {
            var slider = !window.jQuery ? window.setTimeout(timer_metaslider, 100) : !jQuery.isReady ? window
                .setTimeout(timer_metaslider, 1) : metaslider(window.jQuery);
        };
        timer_metaslider();
    </script>
    <script type="text/javascript" src="{{ url('js/jQuery.easing.min.js') }}"></script>
@endsection
