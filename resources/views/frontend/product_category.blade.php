@extends('frontend.layouts.app')

@section('web-title') {{ucwords(str_replace('-', ' ', $slug))}} @stop

@section('content')
    <main class="content-product-archive">

        <h2 class="title-style-1  theme-normal">
            <span class="content">{{str_replace('-', ' ', $slug)}}</span>
        </h2>
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4">
                @foreach ($products as $r)
                    <div class="col">
                        <a class="single-product-permalink" href="{{url('/product/'.strtolower(str_replace(" ", "+", $r->name)))}}">
                            <article class="single-product-item">
                                <h2 class="title">{{str_replace("+", " ", $r->name)}}</h2>
                                <div class="thumbnail">
                                    <img width="376" height="500" src="{{$r->images}}"loading="lazy"></div>
                                <div class="btn btn-theme seemore">Information</div>
                            </article>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
