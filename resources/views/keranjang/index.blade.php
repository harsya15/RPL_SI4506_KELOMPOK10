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
	.modal-content button.btn {
		background-color:#2B3467;
		color:white;
		height:42px;
	}
	.modal-content button.btn:hover{
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

    <section id="keranjang" class="ftco-section layout_padding pt-120">
        <div class="container">
            <div class="section_title text-center pb-25">
                <h4 class="title">Keranjang</h4>
                <span class="line">
                    <span class="box"></span>
                </span>
            </div> <!-- section title -->
    		<div class="row mt-20">
    			<div class="table-wrap">
					<table class="table">
						<thead class="thead-primary">
						    <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
						    </tr>
						</thead>
						<?php $no = 1 ?>
						@if (count($keranjang) > 0)
						<tbody>
                            @foreach($keranjang as $keranjangs)
						    <tr class="alert" role="alert">
						    	<td class="number">{{ $no++ }}</td>
						    	<td><img class="img" src="{{ url('uploads/menu').'/'.$keranjangs->gambar_menu }}" alt=""></td>
						        <td><h4>{{ $keranjangs->nama_menu }}</h4></td>
						        <td><p>{{ $keranjangs->harga_menu }}</p></td>
						        <td class="quantity">{{ $keranjangs->jumlah }}</td>
								<td><p>{{ $keranjangs->subtotal }}</p></td>
						        <td class="aksi">
									<a class="btn btn-warning ubah-button" href="">Ubah</a>
									<form method="post" action="{{ route('keranjang.delete', $keranjangs->id) }}" style="display: inline-block;">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
									</form>
				        	    </td>
						    </tr>
                            @endforeach
						</tbody>
						@else
						<tbody>
							<tr class="alert" role="alert">
								<td colspan="7">Keranjang Kosong</td>
							</tr>
						</tbody>
						@endif
					</table>
				</div>
    		</div>

			<form action="{{ route('pesanan.store') }}" method="post">
				@csrf
				<div class="row mt-30">
					<div class="container">
						<div id="form">
							<label for="request">Catatan:</label>
							<input name="catatan" type="text" required placeholder="Contoh: tambahan bumbu">
						</div>
					</div>
				</div>

				<div class="row justify-content-end">
					<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
						<div class="cart-total mb-3">
							<h3>Cart Totals</h3>
							<p class="d-flex">
								<span>Subtotal</span>
								<span>{{ 'Rp. ' . number_format($keranjang_subtotal, 0, ',', '.') }}</span>
							</p>
							<p class="d-flex">
								<span>Delivery</span>
								<span>Rp. 0</span>
							</p>
							<p class="d-flex">
								<span>Discount</span>
								<span>Rp. 0</span>
							</p>
							<hr>
							<p class="d-flex">
								<span>Total</span>
								<span>{{ 'Rp. ' . number_format($keranjang_subtotal, 0, ',', '.') }}</span>
							</p>
						</div>
						<p class="text-center">
							<button type="submit" class="btn btn-primary py-3 px-4">Proceed to Checkout</button>
						</p>
					</div>
				</div>
			</form>
		</div>
    </section>

	<script>
		function handleRadioClick(radio) {
			var selectedValue = radio.value;
			window.localStorage.setItem('checked', selectedValue);
		}

		function test(id, nama, harga){
			var valueLocal  = localStorage.getItem("checked")
			console.log(valueLocal)
			$('input[name="radio-card"][value="' + valueLocal + '"]').prop('checked', true);

			
			$('#myModal').modal('show');
			$('.id_menu').val(id)
			$('.nama_menu').val(nama)
			$('.harga').val(harga)

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
@endsection
