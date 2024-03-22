@extends('landingPage.layouts.app')
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

    <!--====== GALERI FOTO PART START======-->

    <section id="contact" class="contact_area">
        <div class="contact_form pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center pb-30">
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== GALERI FOTO PART ENDS ======-->

    <!--====== MENU PART START ======-->
    <section id="contact" class="contact_area">
        <div class="contact_form pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center pb-30">
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    

    <!--====== MENU PART ENDS ======-->


    <!--====== CUSTOMER PART START ======-->

    

    <!--====== CUSTOMER PART ENDS ======-->


    <!--====== FEEDBACK PART START ======-->

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
                
                <form action="" method="post">
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

    <!--====== FEEDBACK PART ENDS ======-->


    <!--====== OUTLET PART START======-->

    <section id="contact" class="contact_area">
        <div class="contact_form pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center pb-30">
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== OUTLET PART ENDS ======-->

@endsection