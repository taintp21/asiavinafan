@extends('layouts.app')
@section('content')
    <main class="content-exchange-policy">

        <h2 class="title-style-1  theme-normal">
            <span class="content">EXCHANGE POLICY</span>
        </h2>
        <div class="container">

            <div class="asiavina-list-ol mb-100">
                <div class="asiavina-list-ol-item " data-i="1">
                    <div class="asiavina-list-ol-index">01</div>
                    <div class="asiavina-list-ol-content">
                        <h3 class="title">EXCHANGE PERIOD</h3>
                        <div class="content">
                            <p>ASIAvina Fan is exchanged it made by a quality problem or for a failure of warranty repair.
                                Limited to products within warranty period and is description as below:</p>
                            <ul>
                                <li>within seven (07) days from date of purchased of end-users or six (06) months from month
                                    of production without roof of purchased date</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="asiavina-list-ol-item asiavina-list-ol-item-end" data-i="2">
                    <div class="asiavina-list-ol-index">02</div>
                    <div class="asiavina-list-ol-content">
                        <h3 class="title">EXCHANGE CONDITIONS</h3>
                        <div class="content">
                            <ul>
                                <li>Defected is caused by component quality or technical problem in manufacture process</li>
                                <li>Product is new and no used</li>
                                <li>Having full box &amp; accessory</li>
                                <li>Product label is no scratch, damage</li>
                            </ul>
                            <div class="bv-shadow-dom bv-shadow-dom-fade_out"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <section class="service-partners">
            <div class="container">

                <h2 class="title-style-2 ">
                    <span class="content">Find an Authorized service partner nearest you</span>
                </h2>
                <div class="service-partners-finder" id="service-partners-finder-62611461701bc">
                    <div class="row d-none d-md-flex">
                        <div class="col-5">
                            <i class="fa-solid fa-location-dot"></i>
                            <select class="custom-select cities">
                                <option selected="">Choose Province/ City</option>
                                <option value="An Giang">An Giang</option>
                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                <option value="Bình Dương">Bình Dương</option>
                                <option value="Bình Thuận">Bình Thuận</option>
                                <option value="Bình Định">Bình Định</option>
                                <option value="Bạc Liêu">Bạc Liêu</option>
                                <option value="Bắc Giang">Bắc Giang</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Bến Tre">Bến Tre</option>
                                <option value="Cà Mau">Cà Mau</option>
                                <option value="Cần Thơ">Cần Thơ</option>
                                <option value="Gia Lai">Gia Lai</option>
                                <option value="Huế">Huế</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                <option value="Hải Dương">Hải Dương</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Hậu Giang">Hậu Giang</option>
                                <option value="Khánh Hòa">Khánh Hòa</option>
                                <option value="Kiên Giang">Kiên Giang</option>
                                <option value="Long An">Long An</option>
                                <option value="Lâm Đồng">Lâm Đồng</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Nghệ An">Nghệ An</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Ninh Thuận">Ninh Thuận</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Phú Yên">Phú Yên</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Nam">Quảng Nam</option>
                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Quảng Trị">Quảng Trị</option>
                                <option value="Sóc Trăng">Sóc Trăng</option>
                                <option value="Thanh Hóa">Thanh Hóa</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Tiền Giang">Tiền Giang</option>
                                <option value="Tp HCM">Tp HCM</option>
                                <option value="Trà Vinh">Trà Vinh</option>
                                <option value="Tuyên Quang">Tuyên Quang</option>
                                <option value="Tây Ninh">Tây Ninh</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Đăk Lăk">Đăk Lăk</option>
                                <option value="Đăk Nông">Đăk Nông</option>
                                <option value="Đồng Nai">Đồng Nai</option>
                                <option value="Đồng Tháp">Đồng Tháp</option>
                            </select>
                        </div>

                        <div class="col-5">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Enter Street, Ward, District" class="filter">
                        </div>

                        <div class="col-2">
                            <button class="btn btn-theme fl-r">Search</button>
                        </div>
                    </div>
                </div>

                <table id="search-result" class="table table-striped table-bordered"
                    style="display:none; width: 100%; margin: 30px 0px">
                    <thead>
                        <tr>
                            <th>Province/ City</th>
                            <th>Partner Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </section>

        <section class="service-support service-support-bg-2">
            <div class="position-relative ta-c">

                <h2 class="title-style-1  text-white">
                    <span class="content">SUPPORT OFFICE</span>
                </h2>
                <div class="fs-13 fw-lighter mb-30">
                    <div class="row">
                        <div class="col col-lg-6 offset-lg-3">All of our after-sales services are offered based on the terms
                            &amp; conditions above. If you have any other requirements or inquiries, please get in touch
                            with our Consumer Satisfaction Support Department with the following contact details.</div>
                    </div>
                </div>

                <h3 class="fs-20 mb-30">Agent Distributors of ASIAvina across the country</h3>

                <div class="fs-13">
                    <p>25 Nguyen Thi Nho Street, Ward 09, Tan Binh Dist, HCMC, Vietnam</p>
                    <p>Vietnam consumer Contact Center: 1800-555-521</p>
                    <p>Email: vn.info@groupeseb.com</p>
                </div>
            </div>
        </section>

        <section class="hotline">
            <div class="hotline-container">
                <p class="mb-0">Please call the hotline <span class="phone fs-30 ml-10">1800-555-521</span></p>
                <p>or contact our Authorized Service Partner for further assistance.</p>
            </div>
        </section>
    </main>
@endsection
