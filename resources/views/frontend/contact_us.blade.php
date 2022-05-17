@extends('frontend.layouts.app')
@section('web-title','Contact Us')
@section('link-include')
    <script src="{{asset("js/sweetalert2@11.js")}}"></script>
@endsection
@section('content')
    <h2 class="title-style-1  theme-normal">
        <span class="content">CONTACT US</span>
    </h2>
    <div class="container">
        <h2 class="title-style-3 ">
            <span class="content ">Get in touch with us</span>
        </h2>
    </div>
    <section class="retailers">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <article class="retailer">
                        <h2 class="title">Head Office</h2>
                        <p class="info">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>12th Floor, Lottery Building, 77 Tran Nhan Ton Street, Ward 9, District 5, HCMC</span>
                        </p>
                        <p class="info">
                            <i class="fa-solid fa-phone"></i>
                            <span>(+84) 28 3938 1600</span>
                        </p>
                        <p class="info">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>(+84) 28 3938 1601</span>
                        </p>
                        <p class="info">
                            <i class="fa-solid fa-envelope"></i>
                            <span>vn.info@groupeseb.com</span>
                        </p>
                    </article>
                </div>
                <div class="col">
                    <article class="retailer">
                        <h2 class="title">Vinh Loc Factory</h2>

                        <p class="info">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>B13/1 No. 1 Street, Vinh Loc Industrial park, Binh Tan District, HCMC</span>
                        </p>


                        <p class="info">
                            <i class="fa-solid fa-phone"></i>
                            <span>(+84) 28 3765 2072</span>
                        </p>

                        <p class="info">
                            <i class="fa-solid fa-envelope"></i>
                            <span>vn.info@groupeseb.com</span>
                        </p>
                    </article>
                </div>
                <div class="col">
                    <article class="retailer">
                        <h2 class="title">Binh Duong Factory</h2>
                        <p class="info">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>D-4A, My Phuoc 1 Industrial park, Ben Cat town, Binh Dương province</span>
                        </p>
                        <p class="info">
                            <i class="fa-solid fa-phone"></i>
                            <span>(+84) 27 42213130</span>
                        </p>
                        <p class="info">
                            <i class="fa-solid fa-envelope"></i>
                            <span>vn.info@groupeseb.com</span>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="ta-c c-theme fs-15">If you got any question</div>
    <div class="ta-c c-theme fs-15">Please leave your message here</div>
    <section class="asiavina-contact-form container" id="send-contact">
        <form class="mt-50 mb-100" method="post" action="{{route('send-contact')}}">
            @csrf
            <div class="col-auto mb-20">
                <label class="sr-only" for="input-name">Your Name</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text @error('name')border-danger @enderror">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="text" name="nameContact" class="form-control @error('name')border-danger @enderror" id="input-name" placeholder="Your Name" value="{{old('nameContact')}}">
                </div>
                @error('name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-auto mb-20">
                <label class="sr-only" for="input-email">Your Email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text @error('email')border-danger @enderror">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                    </div>
                    <input type="text" name="emailContact" class="form-control @error('email')border-danger @enderror" id="input-email" placeholder="Your Email" value="{{old('emailContact')}}">
                </div>
                @error('email') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-auto mb-20">
                <label class="sr-only" for="input-content">Content</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text @error('content')border-danger @enderror">
                            <i class="fa-regular fa-message"></i>
                        </div>
                    </div>
                    <textarea class="form-control @error('contentContact')border-danger @enderror" id="input-content" name="contentContact" placeholder="Content">{{old('contentContact')}}</textarea>
                </div>
                @error('content') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <p class="ta-c mt-50">
                <button type="submit" class="btn btn-theme">Send</button>
            </p>
        </form>
    </section>
    @if(session('success'))
        <script>
            $(document).ready(function(){
                $('html, body').animate({
                    scrollTop: $("#send-contact").offset().top
                }, 500);
                Swal.fire({
                    icon: 'success',
                    title: 'Your data has been sent!',
                });
            })
        </script>
    @endif
    @if($errors->any())
        <script>
            $(document).ready(function(){
                $('html, body').animate({
                    scrollTop: $("#send-contact").offset().top
                }, 500);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                });
            })
        </script>
    @endif
@endsection
