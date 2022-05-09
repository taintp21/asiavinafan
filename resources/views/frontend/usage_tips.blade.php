@extends('frontend.layouts.app')
@section('content')
    <h2 class="title-style-1  theme-normal">
        <span class="content">USAGE TIPS</span>
    </h2>
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 offset-lg-3">
                <p class="has-text-color" style="font-size:15px;color:#999999">To improve service quality better for
                    customers who have put trust in ASIAvina products. We recommend 10 solutions when customers have
                    trouble while using our products as following:</p>
            </div>
        </div>


        <div class="asiavina-list-col mt-50">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @php $stt = 0; @endphp
                @forelse ($data as $r)
                    @php
                        $stt++;
                    @endphp
                    <div class="col">
                        <div class="asiavina-list-col-item" data-i="1">
                            <div class="asiavina-list-col-index"><span>{{$stt}}</span></div>
                            <div class="asiavina-list-col-content">
                                <h3 class="title">{{$r->title}}</h3>
                                <div class="content">
                                    <ul>
                                        <li>{{$r->content}}</li>
                                    </ul>
                                    <div class="memorize_new_word_loading"></div>
                                    <div class="bv-shadow-dom bv-shadow-dom-fade_out"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

    </div>

    <section class="hotline">
        <div class="hotline-container">
            <p class="mb-0">Please call the hotline <span class="phone fs-30 ml-10">1800-555-521</span></p>
            <p>or contact our Authorized Service Partner for further assistance.</p>
        </div>
    </section>
@endsection
