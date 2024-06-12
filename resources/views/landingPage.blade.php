@extends('layouts.landingPage.app')
@section('title', 'Sate Balibul')
@section('content')


    <!--====== PEMBAYARAN PART START ======-->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color:white;">Payment Method</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                    <div class="container">
                        <label for="harga_payment" class="mt-3">Summary</label>
                         <h5 id="harga_payment" class="mt-3" style="float: right;"></h5>
                         <hr>
                    </div>

                    <div class="container" style="text-align:center;">
                        <div class="grid-wrapper grid-col-auto">
                            <label for="radio-card-1" class="radio-card">
                            <input type="radio" name="radio-card" onclick="handleRadioClick(this)" id="radio-card-1" value="BCA" checked />
                            <div class="card-content-wrapper">
                                <span class="check-icon"></span>
                                <div class="card-content text-center">
                                <img src="https://www.bca.co.id/-/media/Feature/Header/Header-Logo/logo-bca.svg?"
                                    class="img-fluid" />
                                <h4>BCA</h4>
                                </div>
                            </div>
                            </label>
                            <!-- /.radio-card -->
                            <label for="radio-card-2" class="radio-card">
                            <input type="radio" name="radio-card" onclick="handleRadioClick(this)" id="radio-card-2" value="Mandiri" />
                            <div class="card-content-wrapper">
                                <span class="check-icon"></span>
                                <div class="card-content text-center">
                                <img src="https://bankmandiri.co.id/image/layout_set_logo?img_id=31567&t=1715878917709"
                                    class="img-fluid" />
                                <h4>Mandiri</h4>
                                </div>
                            </div>
                            </label>
                            <!-- /.radio-card -->
                            <label for="radio-card-3" class="radio-card">
                            <input type="radio" name="radio-card" onclick="handleRadioClick(this)" id="radio-card-3" value="BRI" />
                            <div class="card-content-wrapper">
                                <span class="check-icon"></span>
                                <div class="card-content text-center">
                                <img src="https://bri.co.id/o/bri-corporate-theme/images/bri-logo.png"
                                    class="img-fluid" />
                                <h4>BRI</h4>
                                </div>
                            </div>
                            </label>
                            <!-- /.radio-card -->
                            <label for="radio-card-4" class="radio-card">
                            <input type="radio" name="radio-card" onclick="handleRadioClick(this)" id="radio-card-4" value="BNI" />
                            <div class="card-content-wrapper">
                                <span class="check-icon"></span>
                                <div class="card-content text-center">
                                <img src="https://www.bni.co.id/Portals/1/bni-logo-id.png"
                                    class="img-fluid" />
                                <h4>BNI</h4>
                                </div>
                            </div>
                            </label>
                            <!-- /.radio-card -->
                            <label for="radio-card-5" class="radio-card">
                            <input type="radio" name="radio-card" onclick="handleRadioClick(this)" id="radio-card-5" value="CC" />
                            <div class="card-content-wrapper">
                                <span class="check-icon"></span>
                                <div class="card-content text-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/2175/2175515.png"
                                    class="img-fluid" />
                                <h4>Credit Card</h4>
                                </div>
                            </div>
                            </label>
                            <!-- /.radio-card -->
        
                        </div>
                        <!-- /.grid-wrapper -->
                    </div>

                </div>
                <div class="modal-footer justify-content-end p-0 mt-3">
                    <button type="button" class="btn-outline-light m-0" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="button" class="btn-outline-primary m-0" data-dismiss="modal" aria-label="Close" onclick="next()">Next</button>
                </div>
            </div>
              <!-- /.modal-content -->
        </div>
    </div>

    <div class="modal fade" id="myModalBank" tabindex="-1" role="dialog" aria-labelledby="myModalLabelBank" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color:white;">Payment Method</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                    <div class="container m-3">
                        <form action="{{ route('items.save') }}" method="POST">
                        @csrf

                            <input type="hidden" class="form-control id_menu" name="id_menu" >
                            <input type="hidden" class="form-control nama_menu" name="nama_menu" >
                            <input type="hidden" class="form-control" name="id_bank" id="id_bank_save">
                            <input type="hidden" class="form-control harga" name="harga" id="harga_save">

                            <h2>Cara Pembayaran</h2>
                            <p>Silakan melakukan pembayaran melalui ATM Non-Tunai, setoran Bank, atau Internet Banking dengan nominal tepat seperti tertera diatas.</p><br>
                            <p>Anda dapat melakukan pembayaran ke nomor rekening berikut:</p>
                            <ul class="">
                                <li><strong id="id_bank"></strong> <br />
                                    &nbsp;&nbsp;No. Rek 011-322-1060 <br />
                                    &nbsp;&nbsp;KCU. Bandung <br />
                                    &nbsp;&nbsp;An. Sate Balibul</p>
                                </li>
                            </ul>

                            <button class="btn btn-primary mt-2" type="submit">Make a payment!</button>
                        </form>
                    </div>
                </div>
                <!-- <div class="modal-footer justify-content-end p-0 mt-3">
                    <button type="button" class="btn-outline-light m-0" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="button" class="btn-outline-primary m-0">Confirm</button>
                </div> -->
            </div>
              <!-- /.modal-content -->
        </div>
    </div>

    <div class="modal fade" id="myModalCC" tabindex="-1" role="dialog" aria-labelledby="myModalLabelCC" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color:white;">Payment Method</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                    <div class="container m-4">
                        <form action="{{ route('items.save') }}" method="POST">
                        @csrf

                            <input type="hidden" class="form-control id_menu" name="id_menu" >
                            <input type="hidden" class="form-control nama_menu" name="nama_menu" >
                            <input type="hidden" class="form-control harga" name="harga" id="harga_save">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>CARD NUMBER</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="id_bank" placeholder="Valid Card Number" required="">
                                            <!-- <span class="input-group-addon"><i class="fa fa-credit-card"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-2">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>EXPIRATION DATE</label>
                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required="">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>CV CODE</label>
                                        <input type="text" class="form-control" name="CVC" placeholder="CVC" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>NAME OF CARD</label>
                                        <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary" type="submit">Make a payment!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="modal-footer justify-content-end p-0 mt-3">
                    <button type="button" class="btn-outline-light m-0" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="button" class="btn-outline-primary m-0">Confirm</button>
                </div> -->
            </div>
              <!-- /.modal-content -->
        </div>
    </div>

    <!--====== PEMBAYARAN PART ENDS ======-->
    

    <!--====== HEADER AREA PART START ======-->

    <section class="header_area">
        <div id="home" class="header_slider slider-active">
            <div class="single_slider bg_cover d-flex align-items-center"
                style="background-image: url(images/wallpaper-2.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider_content">
                                <h2 class="slider_title">Sate Balibul Bang Ali</h2>
                                <p class="wow fadeInUp">Selamat datang di Rumah Makan Sate Kambing Balibul! Kami adalah
                                    destinasi kuliner unik yang menghadirkan kelezatan sate kambing dengan cita rasa
                                    autentik. Kami bangga menjadi tempat berkumpul bagi pecinta masakan khas Indonesia
                                    yang ingin menikmati cita rasa kambing yang lezat dan istimewa</p>
                                <!-- <a href="https://rebrand.ly/cafe-ud" rel="nofollow" class="main-btn">More About Us</a> -->
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
            <div class="single_slider bg_cover d-flex align-items-center"
                style="background-image: url(images/wallpaper-1.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider_content">
                                <h2 class="slider_title">Sate Balibul Bang Ali</h2>
                                <p class="wow fadeInUp">Selamat datang di Rumah Makan Sate Kambing Balibul! Kami adalah
                                    destinasi kuliner unik yang menghadirkan kelezatan sate kambing dengan cita rasa
                                    autentik. Kami bangga menjadi tempat berkumpul bagi pecinta masakan khas Indonesia
                                    yang ingin menikmati cita rasa kambing yang lezat dan istimewa</p>
                                <!-- <a href="https://rebrand.ly/cafe-ud" rel="nofollow" class="main-btn">More About Us</a> -->
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER AREA PART ENDS ======-->


    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-10">
                        <h4 class="title">About Us</h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="images/portrait.jpg" alt="about">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <h4 class="about_title">Tentang Sate Balibul</h4>
                        <p>Rumah Makan Sate Balibul didirikan dengan cinta dan dedikasi untuk memperkenalkan kelezatan sate
                            kambing Indonesia ke seluruh penjuru. Pendiri kami, Ibu Tabita dan Bapak Ali, adalah seorang
                            pengusaha yang telah menjalani perjalanan kuliner mereka dengan kehidupan dan warisan yang kuat.
                            Mereka membawa pengetahuan mereka dalam meracik dan memanggang sate kambing yang sempurna,
                            dengan resep warisan keluarga yang telah turun-temurun.</p>
                        <ul class="social">
                            <li><a href="https://wa.me/082224000250"><i class="lni lni-whatsapp"></i></a></li>
                            <li><a href="https://www.instagram.com/satebalibulbangali/"><i
                                        class="lni lni-instagram-original"></i></a></li>
                        </ul>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== COUNTER PART START ======-->


    <section id="counter" class="counter_area pt-50 pb-95 text-center" style="background-image: url(images/sate\ wallpaper.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <span class="count"><span class="counter">36546</span></span>
                        <p>Satay Served</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <span class="count"><span class="counter">6</span></span>
                        <p>Type of Satay</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <span class="count"><span class="counter">12</span></span>
                        <p>Team Members</p>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COUNTER PART ENDS ======-->
    

    <!--====== GALERI FOTO PART START======-->
    

    <section id="gallery" class="gallery pt-120 pb-10">
        <div class="section_title text-center pb-50">
            <h4 class="title">Gallery</h4>
            <span class="line">
                <span class="box"></span>
            </span>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="images/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="images/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== GALERI FOTO PART ENDS ======-->


    <!--====== MENU PART START ======-->

    <section id="menu" class="food_section layout_padding pt-120">
        <div class="container">
            <div class="section_title text-center pb-25">
                <h4 class="title">Menu</h4>
                <span class="line">
                    <span class="box"></span>
                </span>
            </div> <!-- section title -->
            <div>
                <a href="/order" class="container mt-4 text-center">
                    <button class="btn btn-danger">Buy Now</button>
                </a>
            </div>
            
            <ul class="filters_menu">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".sate">Sate</li>
                <li data-filter=".masakan">Masakan</li>
            </ul>

            <div class="filters-content">
                <div class="row grid">
                    @foreach($menu as $menus) 
                    <div class="col-lg-4 col-md-7 col-sm-9 all {{ $menus->kategori_menu }}">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="{{asset('uploads/menu/'.$menus->gambar_menu)}}" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="menu mb-2">
                                        <h4>{{ $menus->nama_menu }}</h4>
                                        @if ($menus->label_menu == 'best_seller')
                                        <span>Best Seller</span>
                                        @endif
                                    </div>
                                    <p>{{ $menus->deskripsi_menu }}</p>
                                    <div class="options mt-3">
                                        <h6>{{ 'Rp '.number_format($menus->harga_menu/1000).'k' }}</h6>
                                        <form action="/keranjang/store/{{$menus->id}}" method="post">
                                            @csrf
                                            <button type="submit">
                                                <i class="lni lni-cart"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single menu -->
                    @endforeach
                </div> <!-- row-->
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== MENU PART ENDS ======-->


    <!--====== Reservasi PART START ======-->

    <section id="reservasi" class="contact_area">
        <div class="contact_form pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center pb-30">
                            <h4 class="title">Reservasi Meja</h4>
                            <span class="line">
                                <span class="box"></span>
                            </span>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->

                <form action="/reservasi/insert" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input required name="atas_nama" id="atas_nama" type="text" placeholder="Atas Nama">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input required name="no_meja" id="no_meja" type="number" placeholder="No Meja">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input required name="date" id="date" type="date" placeholder="Tanggal">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                              <input required name="time" id="time" type="time" placeholder="Waktu">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input required name="jumlah" id="jumlah" type="number" placeholder="Jumlah Orang">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input required name="email" id="email" type="email" placeholder="Email">
                            </div> <!-- single form -->
                        </div>

                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <div class="single_form text-center mt-30">
                                <button type="submit" class="main-btn">Reservasi Meja</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                </form>
            </div> <!-- container -->
        </div> <!-- contact form -->
    </section>

    <!--====== Reservasi PART ENDS ======-->


    <!--====== FEEDBACK PART START ======-->

    <section id="customer" class="customer_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-30">
                        <h4 class="title">Customers Feedback</h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row customer_active">
                <div class="col-lg-6">
                    <div class="single_customer d-sm-flex align-items-center mt-30">
                        <div class="customer_image">
                            <img src="images/customer-1.jpeg" alt="customer">
                        </div>
                        <div class="customer_content media-body">
                            <div class="customer_content_wrapper media-body">
                                <h5 class="author_name">Ibu Siti Nurhalizah dan Pak Agus</h5>
                                <span class="sub_title">Satay Lover</span>
                                <p>“Rekomendasi Sate Buntel dan Sate Kambing.. Teksturnya empuk dan bumbunya meresap”</p>
                                <ul class="star">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single customer -->
                </div>
                <div class="col-lg-6">
                    <div class="single_customer d-sm-flex align-items-center mt-30">
                        <div class="customer_image">
                            <img src="images/customer-2.jpeg" alt="customer">
                        </div>
                        <div class="customer_content media-body">
                            <div class="customer_content_wrapper media-body">
                                <h5 class="author_name">ibu aisyah</h5>
                                <span class="sub_title">Food Enthusiast</span>
                                <p>“Mudah dijangkau dengan transportasi umum maupun pribadi. Untuk masalah harga, relatif
                                    ya..kan kambing empuk...enak kok satenya”</p>
                                <ul class="star">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single customer -->
                </div>
                <div class="col-lg-6">
                    <div class="single_customer d-sm-flex align-items-center mt-30">
                        <div class="customer_image">
                            <img src="images/customer-3.jpeg" alt="customer">
                        </div>
                        <div class="customer_content media-body">
                            <div class="customer_content_wrapper media-body">
                                <h5 class="author_name">Rob Hope</h5>
                                <span class="sub_title">Enthusiasts</span>
                                <p>“Banyak pilihan sate. Buat lidah saya kecap nya terlalu manis tapi rasanya Enak . Good
                                    lah”</p>
                                <ul class="star">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single customer -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== FEEDBACK PART ENDS ======-->


    <!--====== MENGAKSES KONTAK PART START ======-->

    <section id="contact" class="contact_area">
        <div class="contact_form pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center pb-30">
                            <h4 class="title">Mengakses Kontak</h4>
                            <span class="line">
                                <span class="box"></span>
                            </span>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                
                <form action="/getintouch" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input required name="name" id="name" type="text" placeholder="Name">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input required name="email" id="email" type="email" placeholder="Email">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input required name="subject" id="subject" type="text" placeholder="Subject">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <textarea required name="message" id="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                        </div>
                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <div class="single_form text-center mt-30">
                                <button type="submit" class="main-btn">SUBMIT</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                </form>

            </div> <!-- container -->
        </div> <!-- contact form -->
    </section>

    <!--====== MENGAKSES KONTAK PART ENDS ======-->


    <!--====== OUTLET PART START======-->

    <section id="outlet" class="outlet_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-50">
                        <h4 class="title">Our Outlet</h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center pb-90">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Pusat</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. A. Yani No. 219 Pabelan Kartasura</p>
                            <a href="https://wa.me/081326598126">Telp. 081326598126</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Yogya</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Godean KM. 45 Area SPU Banyuraden, Yogyakarta</p>
                            <a href="https://wa.me/081250331779">Telp. 081250331779</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Magelang</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Magelang - Secang, Magelang (Depan kantor kec. Secang)</p>
                            <a href="https://wa.me/081226003817">Telp. 081226003817</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Salatiga</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Solo-Semarang, Lopait, Tuntang, Kab. Semarang, Salatiga</p>
                            <a href="https://wa.me/081327218500">Telp. 081327218500</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Prambanan</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Raya Jogjakarta - Solo No.KM.17, Kb. Dalem Kidul, Kec. Prambanan, Kab.
                                Klaten, Jawa Tengah</p>
                            <a href="https://wa.me/082324404571">Telp. 082324404571</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Sukoharjo</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Slamet Riyadi Begajah Sukoharjo</p>
                            <a href="https://wa.me/08818097065">Telp. 08818097065</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Wates</h4>
                            </li>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Wates KM.7, Balecatur Sleman, Yogyakarta</p>
                            <a href="https://wa.me/082140659809">Telp. 082140659809</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper">Sate Balibul Kalasan</h4>
                        </div>
                        <div class="outlet_content">
                            <p>Jl. Solo Jogja KM. 11, Kalasan, Yogyakarta</p>
                            <a href="https://wa.me/081311435400">Telp. 081311435400</a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_outlet mt-30 wow fadeInLeftBig">
                        <div class="outlet_location">
                            <h4 class="text-wrapper"></h4>
                        </div>
                        <div class="outlet_content">
                            <p></p>
                            <a></a>
                        </div>
                    </div> <!-- single outlet -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="contact_map">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas"
                    src="https://www.google.com/maps/d/u/0/embed?mid=13ln3xA3LVQnkn2EsGw1tlwt5_MPvooc&ehbc=2E312F&noprof=1"
                    width="640" height="480" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"></iframe>
            </div>
        </div> <!-- contact map -->
    </section>

    <!--====== OUTLET PART ENDS ======-->

@endsection
