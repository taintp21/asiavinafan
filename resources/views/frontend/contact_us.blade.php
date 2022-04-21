@extends('layouts.app')
@section('content')
    <h2 class="title-style-1  theme-normal">
        <span class="content">CONTACT US</span>
    </h2>
    <div class="container">

        <h2 class="title-style-3">
            <span class="content">Get in touch with us</span>
        </h2>
    </div>

    <section class="retailers">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <article class="retailer status-publish hentry retailer_category-contact-us">
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
                            <i class="fa-solid fa-phone"></i>
                            <span>(+84) 28 3938 1601</span>
                        </p>
                        <p class="info">
                            <i class="fa-solid fa-envelope"></i>
                            <span>vn.info@groupeseb.com</span>
                        </p>
                    </article>
                </div>
                <div class="col">
                    <article class="retailer status-publish hentry retailer_category-contact-us">
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
                    <article class="retailer status-publish hentry retailer_category-contact-us">
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
    <section class="asiavina-contact-form container">
        <form class="mt-50 mb-100">

            <div class="col-auto mb-20">
                <label class="sr-only" for="input-name">Your Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="username" style="background-color: white;"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="name" class="form-control" id="input-name" placeholder="Your Name" required="" style="border-left: none;">
                </div>
            </div>
            <div class="col-auto mb-20">
                <label class="sr-only" for="input-name">Your Email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="username"  style="background-color: white;"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" id="input-email" placeholder="Your Email" required="" style="border-left: none;">
                </div>
            </div>
            <div class="col-auto mb-20">
                <label class="sr-only" for="input-name">Your Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="username" style="background-color: white; align-items: inherit;"><i class="fa-regular fa-message mt-1"></i></span>
                    <textarea class="form-control" id="input-content" name="content" placeholder="Content" required="" style="border-left: none;" rows="10" cols="10"></textarea>
                </div>
            </div>
            <p class="ta-c mt-50">
                <button type="submit" class="btn btn-theme">Send</button>
            </p>
        </form>
    </section>
@endsection
