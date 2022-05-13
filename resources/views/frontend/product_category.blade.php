@extends('frontend.layouts.app')

@section('web-title') {{ucwords(str_replace('-', ' ', $slug))}} @stop

@section('content')
    <main class="content-product-archive">

        <h2 class="title-style-1  theme-normal">
            <span class="content">{{str_replace('-', ' ', $slug)}}</span>
        </h2>
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4">
                @forelse ($products as $r)
                    <div class="col">
                        <a class="single-product-permalink" href="{{url('/product/'.strtolower($r->name))}}">
                            <article
                                class="single-product-item product product-id-533 post-533 product type-product has-post-thumbnail product_cat-ventilation-fan">
                                <h2 class="title">{{$r->name}}</h2>
                                <div class="thumbnail"><img width="376" height="500"
                                        src="{{$r->images}}"
                                        class="attachment-asiavina_product_thumbnail size-asiavina_product_thumbnail wp-post-image" loading="lazy"></div>
                                <div class="btn btn-theme seemore">Information</div>
                            </article>
                        </a>
                    </div>
                @empty

                @endforelse
            </div>
        </div>
    </main>
@endsection
