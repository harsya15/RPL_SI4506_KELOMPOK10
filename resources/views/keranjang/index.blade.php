@extends('layouts.landingPage.app')
@section('title', 'Sate Balibul')
@section('content')

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-10">
                        <h4 class="title">Keranjang</h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="cart-items">
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset('uploads/menu/' . $item->list_menu->gambar_menu) }}"
                                            class="img-fluid" alt="" style="max-height: 80px">
                                    </td>
                                    <td>{{ $item->list_menu->nama_menu }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>
                                        <input type="number" class="form-control jumlah" id="jumlah"
                                            value="{{ $item->jumlah }}" name="jumlah" min="1" style="width: 70px">
                                    </td>
                                    <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm btnUpdate"
                                            data-id="{{ $item->id }}">Update</button>
                                        <form action="{{ route('keranjang.destroy', $item->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="removeItem(this)">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-center">Total Harga</td>
                                <th colspan="2">Rp {{ number_format($items->sum('total_harga'), 0, ',', '.') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Form Checkout</h4>
                            <form action="" method="">
                                @csrf
                                <div class='form-group'>
                                    <label for='metode_pembayaran'>Metode Pembayaran <span
                                            class='text-danger'>*</span></label>
                                    <select name='metode_pembayaran' id='metode_pembayaran'
                                        class='form-control @error('metode_pembayaran') is-invalid @enderror'>
                                        <option value='' selected disabled>Pilih Metode Pembayaran</option>
                                    </select>
                                    @error('metode_pembayaran')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='catatan' class='mb-2'>Catatan <span class='text-danger'>*</span></label>
                                    <textarea name='catatan' id='catatan' cols='30' rows='3'
                                        class='form-control @error('catatan') is-invalid @enderror'>{{ old('catatan') }}</textarea>
                                    @error('catatan')
                                        <div class='invalid-feedback'>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">Checkout Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('body').on('click', '.btnUpdate', function() {
                let row = $(this).closest('tr');
                let jumlah = row.find('input[name="jumlah"]').val();
                let id = $(this).data('id');

                $.ajax({
                    url: '{{ route('keranjang.update') }}',
                    dataType: 'JSON',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id: id,
                        jumlah: jumlah
                    },
                    success: function(response) {
                        if (response.status) {
                            location.reload();
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            });
        })
    </script>
@endpush
