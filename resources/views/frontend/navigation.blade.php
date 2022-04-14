<header class="shadow-sm bg-body">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{url('img/logo.png')}}" width="80px">
            </a>
            <div class="d-flex justify-content-evenly fw-bold">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navigation">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'shop' ? 'active' : '' }}" href="{{url('shop')}}">ASIAVina Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'agents' ? 'active' : '' }}" href="{{url('agents')}}">Stores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Customer Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </nav>
</header>
