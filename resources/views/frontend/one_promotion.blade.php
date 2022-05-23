@extends('frontend.layouts.app')

@section('web-title') {{$one_promotion->title}} @stop
@section('link-include')
    <style>
        h5{
            color: #4677AB;
            font-weight: bold;
            position: relative;
        }
        h5 span {
            background-color: white;
            padding-right: 10px;
        }
        h5::after{
            content: "";
            position: absolute;
            bottom: 5px;
            left: 0;
            right: 0;
            width: 100%;
            height: 1px;
            background: #749CC6;
            z-index: -1;
            display: block;
        }
        .miniTitle{
            color: black;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@stop
@section('content')
    <div class="container mt-50">
        <div class="row">
            <div class="col-md-9">
                <div class="title">
                    <h2>{{$one_promotion->title}}</h2>
                    <p class="c-theme">{{date_format($one_promotion->updated_at, "d/m/Y H:i")}} by <b>{{DB::table('users')->select("name")->where("id","=",$one_promotion->userId)->first()->name}}</b></p>
                </div>
                <div class="thumbnail mb-50">
                    <img src="{{$one_promotion->image}}" alt="">
                </div>
                <div class="content">
                    {!!$one_promotion->content!!}
                </div>
                <div class="prev-next-button text-right">
                    @if (isset($previous))
                        <a href="{{url('promotion/'.$previous->slug)}}" class="btn btn-outline-theme"><i class="fa-solid fa-arrow-left-long"></i> Previous post</a>
                    @endif
                    @if (isset($next))
                        <a href="{{url('promotion/'.$next->slug)}}" class="btn btn-outline-theme">Next post <i class="fa-solid fa-arrow-right-long"></i></a>
                    @endif
                </div>
            </div>
            <div class="col-md-3 mt-100">
                <h5 class="mb-30"><span class="content">Promotion</span></h5>
                @foreach ($random3Promotions as $r)
                    <div class="card border-0 mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{$r->image}}" style="max-width: 100px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0">
                                    <a href="{{url('promotion/'.$r->slug)}}" class="miniTitle">{{$r->title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
