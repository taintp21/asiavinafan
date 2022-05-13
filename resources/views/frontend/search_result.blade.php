@extends('frontend.layouts.app')

@section('web-title', 'Search')

@section('content')
    <main>
        <div class="container">
            <p>
                <span class="fs-15 fw-bold">Search result for: </span>
                <span class="fs-15 fw-bold c-theme">{{ request()->input('s') }}<span>
                    </span></span>
            </p>
        </div>
        @forelse ($products as $r)
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-4">
                    <div class="col">
                        <a class="single-product-permalink" href="{{url('/product/'.strtolower($r->name))}}">
                            <article class="single-product-item product product type-product has-post-thumbnail product_cat-ventilation-fan first">
                                <h2 class="title">{{$r->name}}</h2>
                                <div class="thumbnail"><img width="376" height="500"
                                        src="{{$r->images}}"
                                        class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image" loading="lazy"></div>
                                <div class="btn btn-theme seemore">Information</div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="ta-c mt-50 mb-50">
                <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/404.png" alt="Not found">
                <h2 class="c-red mt-10">Result not found!</h2>
                <p>We couldn’t find the keyword that you were looking for.</p>
                <a href="{{url('/')}}" class="btn btn-theme">Back Home</a>
            </div>

            <section class="service-support mb-50">
                <div class="p-relative ta-c">

                    <h2 class="title-style-1  theme-white">
                        <span class="content">SUPPORT SERVICE</span>
                    </h2>
                    <div class="fs-13 fw-lighter mb-30">
                        <div>CONTACT ASIAvina</div>
                        <div>TO RECEIVE INSTANT SUPPORT</div>
                    </div>

                    <h3 class="fs-20 mb-30">Agent Distributors of ASIAvina across the country</h3>

                    <div class="fs-13">
                        <p>25 Nguyen Thi Nho Street, Ward 09, Tan Binh Dist, HCMC, Vietnam</p>
                        <p>Vietnam consumer Contact Center: 1800-555-521</p>
                        <p>Email: vn.info@groupeseb.com</p>
                    </div>
                </div>
            </section>

            <section class="related-products">
                <div class="container">
                    <h4>Maybe you want to see more:</h4>

                    <div class="related-products-carousel slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 834px; transform: translate3d(0px, 0px, 0px);">
                                <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                    style="width: 278px;">
                                    <div>
                                        <div class="related-products-item" style="width: 100%; display: inline-block;">
                                            <a class="single-product-permalink"
                                                href="https://quatvietnam.com.vn/product/v04001-sv0/" tabindex="0">
                                                <article
                                                    class="single-product-item product product-id-536 post-536 product type-product status-publish has-post-thumbnail product_cat-ventilation-fan first instock shipping-taxable product-type-simple">
                                                    <h2 class="title">V04001-SV0</h2>
                                                    <div class="thumbnail"><img width="376" height="500"
                                                            src="https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1.png"
                                                            class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image"
                                                            alt="V04001-SV0" loading="lazy"
                                                            srcset="https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1.png 376w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1-226x300.png 226w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1-75x100.png 75w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/V04001-1-150x200.png 150w"
                                                            sizes="(max-width: 376px) 100vw, 376px"></div>
                                                    <div class="btn btn-theme seemore">Information</div>
                                                </article>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    style="width: 278px;">
                                    <div>
                                        <div class="related-products-item" style="width: 100%; display: inline-block;">
                                            <a class="single-product-permalink"
                                                href="https://quatvietnam.com.vn/product/h08001-sv0/" tabindex="0">
                                                <article
                                                    class="single-product-item product product-id-533 post-533 product type-product status-publish has-post-thumbnail product_cat-ventilation-fan  instock shipping-taxable product-type-simple">
                                                    <h2 class="title">H08001-SV0</h2>
                                                    <div class="thumbnail"><img width="376" height="500"
                                                            src="https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1.png"
                                                            class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image"
                                                            alt="H08001-SV0" loading="lazy"
                                                            srcset="https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1.png 376w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1-226x300.png 226w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1-75x100.png 75w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/H08001-1-150x200.png 150w"
                                                            sizes="(max-width: 376px) 100vw, 376px"></div>
                                                    <div class="btn btn-theme seemore">Information</div>
                                                </article>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                    style="width: 278px;">
                                    <div>
                                        <div class="related-products-item" style="width: 100%; display: inline-block;">
                                            <a class="single-product-permalink"
                                                href="https://quatvietnam.com.vn/product/l20002-dv0/" tabindex="0">
                                                <article
                                                    class="single-product-item product product-id-528 post-528 product type-product status-publish has-post-thumbnail product_cat-wall-fan  instock shipping-taxable purchasable product-type-simple">
                                                    <h2 class="title">L20002-DV0</h2>
                                                    <div class="thumbnail"><img width="376" height="500"
                                                            src="https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0.png"
                                                            class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image"
                                                            alt="L20002-DV0" loading="lazy"
                                                            srcset="https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0.png 376w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0-226x300.png 226w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0-75x100.png 75w, https://quatvietnam.com.vn/wp-content/uploads/2021/06/L20002-DV0-150x200.png 150w"
                                                            sizes="(max-width: 376px) 100vw, 376px"></div>
                                                    <div class="btn btn-theme seemore">Information</div>
                                                </article>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        jQuery('.related-products-carousel').slick({
                            infinite: true,
                            slidesToShow: 4,
                            slidesToScroll: 1
                        });
                    </script>

                </div>
            </section>
        @endforelse
    </main>
@endsection
