@extends('frontend.layouts.app')

@section('web-title') {{strtoupper(Request::segment(2))}} | {{$cateName->name}} @stop

@section('link-include')
    <link rel="stylesheet" href="{{ asset('css/public.css') }}" type="text/css" media="all" property="stylesheet">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <script src="{{ url('slick/slick.min.js') }}" id="asiavina-slick-js"></script>
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
                            <h1 class="title">{{ strtoupper($slug) }}</h1>
                            <p></p>
                            <div class="su-heading su-heading-style-default su-heading-align-center" style="margin-bottom:20px">
                                <h4 style="color: #315377; font-weight: 300">TECHNICAL SPECIFICATIONS</h4>
                            </div>
                            <div class="memorize_new_word_loading">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><strong>Size of blades:</strong></td>
                                            <td><span style="color: #999999;">50cm</span></td>
                                            <td width="15"></td>
                                            <td>✅ Thermal fuse protection</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Power : </strong></td>
                                            <td><span style="color: #999999;">80W</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Voltage-Frequency: </strong></td>
                                            <td><span style="color: #999999;">220V-50Hz</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Air flow: </strong></td>
                                            <td><span style="color: #999999;">111m3/min</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>E/e ratio (m3/min/W): </strong></td>
                                            <td><span style="color: #999999;">1,36</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Rounds per minute: </strong></td>
                                            <td><span style="color: #999999;">1200</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of speeds:</strong></td>
                                            <td><span style="color: #999999;">3</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Switch types:</strong></td>
                                            <td><span style="color: #999999;">Pull</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>&nbsp;</p>
                            <h4 style="color: #315377; font-weight: 300">Featured</h4>
                            <ul>
                                <li>The wind loads are wide, extremely strong</li>
                                <li>Suitable for large spaces</li>
                                <li>Convenience when using 2 Zippers</li>
                            </ul>
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

                                    <div class="cat d-block d-md-none">Wall Fan</div>
                                    <h1 class="title d-block d-md-none">L20002-DV0</h1>

                                    <div class="prices">
                                        <div class="cat d-block d-md-none">Price:</div>
                                        <div class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>729,000 ₫</bdi>
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
                            <div class="su-heading su-heading-style-default su-heading-align-center" id=""
                                style="font-size:13px;margin-bottom:20px">
                                <h4>TECHNICAL SPECIFICATIONS</h4>
                            </div>
                            <div class="memorize_new_word_loading">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><strong>Size of blades:</strong></td>
                                            <td><span style="color: #999999;">50cm</span></td>
                                            <td width="15"></td>
                                            <td>✅ Thermal fuse protection</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Power : </strong></td>
                                            <td><span style="color: #999999;">80W</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Voltage-Frequency: </strong></td>
                                            <td><span style="color: #999999;">220V-50Hz</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Air flow: </strong></td>
                                            <td><span style="color: #999999;">111m3/min</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>E/e ratio (m3/min/W): </strong></td>
                                            <td><span style="color: #999999;">1,36</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Rounds per minute: </strong></td>
                                            <td><span style="color: #999999;">1200</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of speeds:</strong></td>
                                            <td><span style="color: #999999;">3</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Switch types:</strong></td>
                                            <td><span style="color: #999999;">Pull</span></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>&nbsp;</p>
                            <h4>Featured</h4>
                            <ul>
                                <li>The wind loads are wide, extremely strong</li>
                                <li>Suitable for large spaces</li>
                                <li>Convenience when using 2 Zippers</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- <section class="related-products">
            <div class="container">
                <h4>Maybe you want to see more:</h4>

                <div class="related-products-carousel slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);">
                        </div>
                    </div>
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
        </section> --}}
@endsection
