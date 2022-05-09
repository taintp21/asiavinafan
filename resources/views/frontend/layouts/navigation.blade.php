<header id="header">
    <div class="container">
        <div class="row row-cols-3 row-cols-lg-12">
            <div class="col-3 d-block d-lg-none">

                <div class="col-va-m hg-full">
                    <a class="btn" href="#" id="mobile-menu-btn-626a0f722a290">
                        <!-- <i class="fas fa-bars fa-2x"></i> -->
                        <img src="https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/images/bars.png"
                            alt="menu">
                    </a>
                </div>

                <div class="mobile-menu">
                    <div class="primary-menu">
                        <ul id="mobile-menu-626a0f722a290" class="menu">
                            <li class="menu-item">
                                <a href="{{ url('shop') }}">Asiavina Fans</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('agents') }}">Store</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('customer-service') }}">Customer Service</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('') }}">Promotion</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('about-us') }}">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('contact-us') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <script>
                    jQuery('#mobile-menu-btn-626a0f722a290').click(function() {
                        var height = jQuery('#mobile-menu-626a0f722a290').height() ? '0px' : '100vh';
                        jQuery('#mobile-menu-626a0f722a290').css({
                            'max-height': height
                        });
                    });
                </script>
            </div>

            <div class="col-3 col-lg-2 hg-full">
                <a href="{{ url('/') }}">
                    <img class="logo"
                        src="https://quatvietnam.com.vn/wp-content/uploads/2021/01/e989b238d6c8f2e7a9a93817fd6cf7cf-128x100.png"
                        alt="Logo">
                </a>
            </div>

            <div class="col d-none d-lg-block col-lg-7">
                <div class="primary-menu wd-full">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item  {{ request()->segment(1) == 'shop' ? 'active' : '' }}">
                            <a href="{{ url('shop') }}">Asiavina Fans</a>
                        </li>
                        <li class="menu-item {{ request()->segment(1) == 'agents' ? 'active' : '' }}">
                            <a href="{{ url('agents') }}">Store</a>
                        </li>
                        <li
                            class="menu-item {{ request()->segment(1) == 'customer-service' ? 'active' : '' }}{{ request()->segment(1) == 'warranty-policy' ? 'active' : '' }}{{ request()->segment(1) == 'exchange-policy' ? 'active' : '' }}{{ request()->segment(1) == 'usage-tips' ? 'active' : '' }}">
                            <a href="{{ url('customer-service') }}">Customer Service</a>
                        </li>
                        <li class="menu-item {{ request()->segment(1) == 'promotion' ? 'active' : '' }}">
                            <a href="{{ url('promotion') }}">Promotion</a>
                        </li>
                        <li class="menu-item {{ request()->segment(1) == 'about-us' ? 'active' : '' }}">
                            <a href="{{ url('about-us') }}">About us</a>
                        </li>
                        <li class="menu-item {{ request()->segment(1) == 'contact-us' ? 'active' : '' }}">
                            <a href="{{ url('contact-us') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-6 col-lg-3 tools">
                <div class="languages">
                    <div class="dropdown">
                        <a class="btn btn-outline-theme dropdown-toggle" href="#" type="button" id="language-toolbox" data-toggle="dropdown" aria-expanded="false">
                            <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652081216/lang-en_k9lmur.png">
                            <span class="d-none d-lg-inline-block">English</span>
                            <span class="d-inline-block d-lg-none">ENG</span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="language-toolbox">
                            <a class="dropdown-item" href="#">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652081216/lang-en_k9lmur.png"> English
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652081250/lang-vi_kc7e8f.png"> Tiếng Việt
                            </a>
                        </div>
                    </div>
                </div>

                <div class="search cs-pointer">
                    <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652081308/search_oxbe07.png" alt="Search">
                </div>
            </div>
        </div>
    </div>
</header>
