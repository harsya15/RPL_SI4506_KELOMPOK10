@extends('Pembayaran.layouts')
@section('content')

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