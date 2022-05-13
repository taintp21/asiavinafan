@extends('frontend.layouts.app')

@section('web-title', 'Store')

@section('content')
    <h2 class="title-style-1  theme-normal">
        <span class="content">Agents</span>
    </h2>
    <div class="container">

        <h2 class="title-style-2 ">
            <span class="content">Retailers of ASIAVina</span>
        </h2>
    </div>

    <section class="retailers">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach ($data as $r)
                    <div class="col">
                        <article class="retailer">
                            <h2 class="title">{{$r->name}}</h2>

                            <p class="info">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>{{$r->location}}</span>
                            </p>


                            <p class="info">
                                <i class="fa-solid fa-phone"></i>
                                <span>{{$r->phone}}</span>
                            </p>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="our-partners">

        <h2 class="title-style-1  theme-normal">
            <span class="content">Our partners</span>
        </h2>
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4">

                @forelse ($partners as $r)
                    <div class="col">
                        <article class="partner">
                            <img src="{{$r->images}}"
                                class="attachment-asiavina_partner_thumbnail size-asiavina_partner_thumbnail wp-post-image"
                                alt="" loading="lazy" width="185" height="55">
                        </article>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
@endsection
