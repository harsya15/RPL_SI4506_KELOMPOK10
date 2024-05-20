@extends('layouts.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<a href="/Cabang/create" type="button" class="btn btn-primary mt-4 mb-2 ms-4">Tambah</a>
<div class="card card-default px-4">
    @if (count($cabang) > 0)
    <div class="card-body mt-4 p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Cabang</th>
                    <th>Alamat</th>
                    <th>Nomor Kontak</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($cabang as $cabangs)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $cabangs->cabang }}</td>
                <td>{{ $cabangs->alamat }}</td>
                <td>{{ $cabangs->kontak }}</td>
                <td class="d-flex flex-col gap-3 justify-items-center">
                    <a class="btn  btn-warning" href="{{ route('cabang.edit', $cabangs->id) }}">Ubah</a>
                    <form method="post" action="{{ route('cabang.delete', $cabangs->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @else
    <p fw-bold>Tidak ada Data Cabang Sate Balibul</p>
    @endif
</div>
@endsection