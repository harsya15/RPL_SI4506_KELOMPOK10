@extends('layouts.landingPage.app')
@section('title', 'Sate Balibul')
@section('content')   

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
                                <th>Number</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
						    </tr>
						</thead>
						<?php $no = 1 ?>
						@if (count($keranjang) > 0)
						<tbody>
                            @foreach($keranjang as $keranjangs)
						    <tr class="alert" role="alert">
						    	<td class="number">
						    		{{ $no++ }}
						    	</td>
						    	<td>
                                    <img class="img" src="{{ url('uploads/menu').'/'.$keranjangs->gambar_menu }}" alt="">
						    	</td>
						        <td>
									<h4>{{ $keranjangs->nama_menu }}</h4>
						        </td>
						        <td>{{ $keranjangs->harga_menu }}</td>
						        <td class="quantity">{{ $keranjangs->jumlah }}</td>
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

			<div class="row">
				<div class="form-group">
					<label for="request">Request:</label>
					<textarea class="form-control" id="request" name="request"></textarea>
				</div>
			</div>

    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex">
    						<span>Total</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
    	</div>
    </section>

@endsection
