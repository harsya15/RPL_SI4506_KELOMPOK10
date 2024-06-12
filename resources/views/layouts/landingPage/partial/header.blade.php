

    <!--====== HEADER PART START ======-->

    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/" alt="Logo">
                                <div class="cuisine">Sate Balibul</div>
                                <img class="logo-sate" src="images/logobalibul.png" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#menu">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#reservasi">Reservasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#customer">Feedback</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#outlet">Outlet</a>
                                    </li>
                                    <div class="user_option ml-5">
                                        <a href="{{ route('keranjang.index') }}" class="cart_link">
                                            <i class="lni lni-cart"></i>
                                            <span class="shop_circle">{{ $keranjang_count }}</span>
                                        </a>
                                    </div>
                                    @if (Auth::check())
                                    <div class="user_option ml-1">
                                        <li class="dropdown">
                                            <a class="cart_link dropdown-toggle mt-1" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="lni lni-user"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/">Reward</a>
                                                <a class="dropdown-item" href="/order/cekdelivery/{nohp}">Delivery</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    </div>
                                    <!-- <div class="user_option ml-2">
                                        <a href="{{ route('logout') }}" class="login" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </div> -->
                                    @else
                                    <div class="user_option ml-3">
                                        <a href="/login" class="login">Login</a>
                                    </div>
                                    @endif
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </section>

    <!--====== HEADER PART ENDS ======-->

