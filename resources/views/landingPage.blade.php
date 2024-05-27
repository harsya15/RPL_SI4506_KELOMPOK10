@extends('layouts.landingPage.app')
@section('title', 'Sate Balibul')
@section('content')


<style>
        .badan{
            width:100vw;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            background:radial-gradient(circle at 75% 50%, #BFDCE5 25%, #F5E9CF 75%);
        } 
        button.btn {
            background-color:#2B3467;
            color:white;
            height:42px;
        }
        button.btn:hover{
            background-color:#3E54AC;
            color:white;
            height:42px;
        }
        .modal-header {
            background-color: #2B3467;
            color: white;
        }
        .modal-header > button{
            color: white;
        }
        label.radio-card {
            cursor: pointer;
            margin: .5em;
        }
        label.radio-card .card-content-wrapper {
            background: #fff;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.04);
            transition: 200ms linear;
            position: relative;
            min-width: 170px;
        }
        label.radio-card .check-icon {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 50%;
            transition: 200ms linear;
            position: absolute;
            right: -10px;
            top: -10px;
        }
        label.radio-card .check-icon:before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='9' viewBox='0 0 12 9' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0.93552 4.58423C0.890286 4.53718 0.854262 4.48209 0.829309 4.42179C0.779553 4.28741 0.779553 4.13965 0.829309 4.00527C0.853759 3.94471 0.889842 3.88952 0.93552 3.84283L1.68941 3.12018C1.73378 3.06821 1.7893 3.02692 1.85185 2.99939C1.91206 2.97215 1.97736 2.95796 2.04345 2.95774C2.11507 2.95635 2.18613 2.97056 2.2517 2.99939C2.31652 3.02822 2.3752 3.06922 2.42456 3.12018L4.69872 5.39851L9.58026 0.516971C9.62828 0.466328 9.68554 0.42533 9.74895 0.396182C9.81468 0.367844 9.88563 0.353653 9.95721 0.354531C10.0244 0.354903 10.0907 0.369582 10.1517 0.397592C10.2128 0.425602 10.2672 0.466298 10.3112 0.516971L11.0651 1.25003C11.1108 1.29672 11.1469 1.35191 11.1713 1.41247C11.2211 1.54686 11.2211 1.69461 11.1713 1.82899C11.1464 1.88929 11.1104 1.94439 11.0651 1.99143L5.06525 7.96007C5.02054 8.0122 4.96514 8.0541 4.90281 8.08294C4.76944 8.13802 4.61967 8.13802 4.4863 8.08294C4.42397 8.0541 4.36857 8.0122 4.32386 7.96007L0.93552 4.58423Z' fill='white'/%3E%3C/svg%3E%0A");
            background-repeat: no-repeat;
            background-size: 12px;
            background-position: center center;
            transform: scale(1.6);
            transition: 200ms linear;
            opacity: 0;
        }
        label.radio-card input[type=radio] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        label.radio-card input[type=radio]:checked + .card-content-wrapper {
            box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.5), 0 0 0 2px #3057d5;
        }
        label.radio-card input[type=radio]:checked + .card-content-wrapper .check-icon {
            background: #3057d5;
            border-color: #3057d5;
            transform: scale(1.2);
        }
        label.radio-card input[type=radio]:checked + .card-content-wrapper .check-icon:before {
            transform: scale(1);
            opacity: 1;
        }
        label.radio-card input[type=radio]:focus + .card-content-wrapper .check-icon {
            box-shadow: 0 0 0 4px rgba(48, 86, 213, 0.2);
            border-color: #3056d5;
        }
        label.radio-card .card-content img {
            margin-bottom: 10px;
        }
        label.radio-card .card-content h4 {
            font-size: 16px;
            letter-spacing: -0.24px;
            text-align: center;
            color: #1f2949;
            margin: 0;
        }
        label.radio-card .card-content h5 {
            font-size: 14px;
            line-height: 1.4;
            text-align: center;
            color: #686d73;
        }
        .card-content > img{
            max-height:35px;
        }
        .modal-footer > button{
            width:50%;
            height:50px;
            border:0;
            color:#222;
        }
        .btn-outline-primary:hover {
            color: #fff;
            background-color: #2B3467!important;
        }

        .btn-outline-light:hover {
            color: #cecece!important;
        }

    </style>

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
                            <input type="radio" name="radio-card" id="radio-card-1" value="BCA" checked />
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
                            <input type="radio" name="radio-card" id="radio-card-2" value="Mandiri" />
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
                            <input type="radio" name="radio-card" id="radio-card-3" value="BRI" />
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
                            <input type="radio" name="radio-card" id="radio-card-4" value="BNI" />
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
                            <input type="radio" name="radio-card" id="radio-card-5" value="CC" />
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

                            <h2>Cara Pembayaran</h2>
                            <p>Silakan melakukan pembayaran melalui ATM Non-Tunai, setoran Bank, atau Internet Banking dengan nominal tepat seperti tertera diatas.</p><br>
                            <p>Anda dapat melakukan pembayaran ke nomor rekening berikut:</p>
                            <ul class="">
                                <li><strong id="id_bank"></strong> <br />
                                    &nbsp;&nbsp;No. Rek 011-322-1060 <br />
                                    &nbsp;&nbsp;KCU Bandung <br />
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

                <a href="/order" class="container mt-4 text-center">
                    <button class="btn btn-danger" style="">Buy Now</button>
                </a>
            </div> <!-- section title -->
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
                                    <h4 class="mb-2">{{ $menus->nama_menu }}</h4>
                                    <p>{{ $menus->deskripsi_menu }}</p>
                                    <div class="options mt-3">
                                        <h6>{{ 'Rp '.number_format($menus->harga_menu/1000).'k' }}</h6>
                                        <form action="">
                                            <button type="submit">
                                                                                        <!-- data-toggle="modal" data-target="#myModal" -->
                                            <button type="button" class="btn btn-primary" onclick="test( '{{ $menus->id }}', '{{ $menus->nama_menu }}', '{{ $menus->harga_menu }}' )">
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
                
                <form action="/insert" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input name="atas_nama" id="atas_nama" type="text" placeholder="Atas Nama">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                            <input name="no_meja" id="no_meja" type="number" placeholder="No Meja">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input name="date" id="date" type="date" placeholder="Tanggal">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                            <input name="time" id="time" type="time" placeholder="Waktu">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input name="jumlah" id="jumlah" type="number" placeholder="Jumlah Orang">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input name="email" id="email" type="email" placeholder="Email">
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

                <form action="/insert" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input name="name" id="name" type="text" placeholder="Nama">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single_form mt-30">
                                <input name="email" id="email" type="email" placeholder="Email">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <input name="subject" id="subject" type="text" placeholder="Subjek">
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single_form mt-30">
                                <textarea name="message" id="message" placeholder="Pesan"></textarea>
                            </div> <!-- single form -->
                        </div>
                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <div class="single_form text-center mt-30">
                                <button type="submit" class="main-btn">KIRIM</button>
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


@endsection


<script>
    function test(id, nama, harga){
        $('#myModal').modal('show');
        $('.id_menu').val(id)
        $('.nama_menu').val(nama)

        $('#harga_payment').empty()
        $('#harga_payment').append('Rp. '+harga)
    }

    function next(){
        var payment_method = $('input[name="radio-card"]:checked').val();

        if(payment_method == 'CC'){
            $('#myModalCC').modal('show');
        }else{
            $('#id_bank').empty()
            $('#id_bank').append('Bank '+payment_method)
            $('#id_bank_save').val(payment_method)
            
            $('#myModalBank').modal('show');
        }

    }
</script>