@extends('frontend.layouts.app')

@section('web-title','Promotion')

@section('content')
    <h2 class="title-style-1  theme-normal">
        <span class="content">Promotion</span>
    </h2>
    @php $where = DB::table("promotions")->where("sale","=",1)->orderBy("id","desc"); @endphp
    <section class="promotion-season mb-100">
        <div class="container">
            <h2 class="title-style-3">
                <span class="content ">Asiavina Seasonal Sale</span>
            </h2>
            <div class="row row-cols-1 row-cols-lg-3 mt-50">
                <div class="col col-lg-3 mb-30">
                    <div class="promote-banner promote-banner-1">
                        @if($where->first() != null)
                            <a href="{{url('promotion/'.$top_sale1->slug)}}" class="p-relative d-contents h-full">
                                <img src="{{$top_sale1->image}}">
                                <button class="btn btn-outline-theme promote-banner-seemore-1">View more <i class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        @else
                            <a href="{{url('promotion')}}" class="p-relative d-contents h-full">
                                <img src="...">
                                <button class="btn btn-outline-light promote-banner-seemore-2">View more <i class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        @endif
                    </div>
                </div>

                <div class="col col-lg-6 mb-30">
                    <div class="promote-banner promote-banner-2">
                        @if($where->skip(1)->take(1)->first() != null)
                            <a href="{{url('promotion/'.$top_sale2->slug)}}" class="p-relative d-contents h-full">
                                <img src="{{$top_sale2->image}}">
                                <button class="btn btn-outline-light promote-banner-seemore-2">View more <i class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        @else
                            <a href="{{url('promotion')}}" class="p-relative d-contents h-full">
                                <img src="...">
                                <button class="btn btn-outline-light promote-banner-seemore-2">View more <i class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        @endif
                    </div>
                </div>

                <div class="col col-lg-3 mb-30">
                    <div class="promote-banner promote-banner-3">
                        @if($where->skip(2)->take(1)->first() != null)
                            <a href="{{$top_sale3->slug}}"><img src="{{$top_sale3->image}}"></a>
                        @else
                            <a href="{{url('promotion')}}"><img src="..."></a>
                        @endif
                    </div>

                    <div class="promote-banner promote-banner-4">
                        @if($where->skip(3)->take(1)->first() != null)
                            <a href="{{$top_sale4->slug}}"><img src="{{$top_sale4->image}}"></a>
                        @else
                            <a href="{{url('promotion')}}"><img src="..."></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promotion-related">
        <div class="container">
            <h2 class="title-style-3 ">
                <span class="content ">Related Promotion</span>
            </h2>
            <div class="row row-cols-1 row-cols-lg-3 mt-50">
                @foreach ($promotions as $r)
                    <div class="col col-lg-4 mb-30">
                        <div class="card card-promotion">
                            <div class="image">
                                <img src="{{$r->image}}" width="450px" height="200px" class="card-img-top" alt="{{$r->slug}}" style="object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-truncate"><a href="{{url('promotion/'.$r->slug)}}">{{$r->title}}</a></h5>
                                <p class="card-text text-truncate">{{htmlspecialchars(strip_tags($r->short_content))}}</p>
                                <div class="text-center">
                                    <a href="{{url('promotion/'.$r->slug)}}" class="btn btn-outline-theme" style="font-size: 15px;">View more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
