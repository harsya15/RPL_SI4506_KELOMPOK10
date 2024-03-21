@extends('layouts.app_landingPage')
@section('title', 'Sate Balibul')
@section('content')

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
                            <li><a href="https://www.instagram.com/satebalibulbangali/"><i class="lni lni-instagram-original"></i></a></li>
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


    <!--====== MENU PART START ======-->

    <section id="menu" class="menu_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-30">
                        <h4 class="title">Menu</h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <!-- <div class="row" id="tabs">
                                        <div class="col-lg-12">
                                            <div class="heading-tabs">
                                                <div class="row">
                                                    <div class="col-lg-6 offset-lg-3">
                                                        <ul>
                                                          <li><a href='#tabs-1'><img src="images/tab-icon-01.png" alt="">Breakfast</a></li>
                                                          <li><a href='#tabs-2'><img src="images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                                          <li><a href='#tabs-3'><img src="images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> tabs -->
            <div id="tabs-1" class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_menu text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="menu_image">
                            <img src="images/sate solo.jpg" height="200" width="250" alt="coffee">
                        </div>
                        <div class="menu_content">
                            <h4 class="menu_title">Sate Khas Solo</h4>
                            <p>Campuran daging kambing balibul dan lemak yang dibakar dengan celupan bumbu kecap. Disajikan
                                dengan kecap khas Solo dengan cita rasa manis dan gurih dan bahan pelengkap lainnya</p>
                        </div>
                    </div> <!-- single menu -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_menu text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="menu_image">
                            <img src="images/sate tegal.jpg" height="200" width="250" alt="menu">
                        </div>
                        <div class="menu_content">
                            <h4 class="menu_title">Sate Khas Tegal</h4>
                            <p>Campuran daging kambing balibul dan lemak yang dibakar tanpa menggunakan bumbu. Disajikan
                                dengan kecap khas Tegaldan bahan pelengkap lainnya</p>
                        </div>
                    </div> <!-- single sate -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_menu text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="menu_image">
                            <img src="images/sate klathak.jpg" height="200" width="250" alt="menu">
                        </div>
                        <div class="menu_content">
                            <h4 class="menu_title">Sate Khas Klathak</h4>
                            <p>Campuran daging kambing balibul dan lemak yang dibakar dengan celupan bumbu gurih. Disajikan
                                dengan kuah gulai dan bahan pelengkap lainnya</p>
                        </div>
                    </div> <!-- single sate -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_menu text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="menu_image">
                            <img src="images/sate buntel.jpg" height="200" width="250" alt="menu">
                        </div>
                        <div class="menu_content">
                            <h4 class="menu_title">Sate Buntel</h4>
                            <p>Sate yang dibuat dari daging kambing balibul cincang yang sudah dibumbui manis & dikukus,
                                lalu dibakar</p>
                        </div>
                    </div> <!-- single sate -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_menu text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="menu_image">
                            <img src="images/sate kepala kambing.jpg" height="200" width="250" alt="menu">
                        </div>
                        <div class="menu_content">
                            <h4 class="menu_title">Sate Kepala Kambing</h4>
                            <p>Kepala kambing balibul bakar yang sudah dipotong - potong kecil dengan 2 pilihan rasa, manis
                                atau gurih</p>
                        </div>
                    </div> <!-- single sate -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single_menu text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="menu_image">
                            <img src="images/sate ayam.jpg" height="200" width="250" alt="menu">
                        </div>
                        <div class="menu_content">
                            <h4 class="menu_title">Sate Ayam</h4>
                            <p>Sate ayam yang disajikan dengan saus kacang khas Sate Balibul Bang Ali</p>
                        </div>
                    </div> <!-- single sate -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== MENU PART ENDS ======-->


    <!--====== CUSTOMER PART START ======-->

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
                            <img src="images/customer-1.jpg" alt="customer">
                        </div>
                        <div class="customer_content media-body">
                            <div class="customer_content_wrapper media-body">
                                <h5 class="author_name">Justyna Helen</h5>
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
                            <img src="images/customer-2.jpg" alt="customer">
                        </div>
                        <div class="customer_content media-body">
                            <div class="customer_content_wrapper media-body">
                                <h5 class="author_name">Fajar Siddiq</h5>
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
                            <img src="images/customer-3.jpg" alt="customer">
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

    <!--====== CUSTOMER PART ENDS ======-->


    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area">
        <div class="contact_form pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center pb-30">
                            <h4 class="title">Get in Touch</h4>
                            <span class="line">
                                <span class="box"></span>
                            </span>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input name="name" id="name" type="text" placeholder="Name">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input name="email" id="email" type="email" placeholder="Email">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input name="subject" id="subject" type="text" placeholder="Subject">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
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

    <!--====== CONTACT PART ENDS ======-->


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
                            <p>Jl. Raya Jogjakarta - Solo No.KM.17, Kb. Dalem Kidul, Kec. Prambanan, Kab. Klaten, Jawa Tengah</p>
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

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

@endsection
