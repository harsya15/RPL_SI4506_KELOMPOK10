@extends('layouts.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<a href="/Rating/create" type="button" class="btn btn-primary mt-4 mb-2 ms-4">Tambah</a>
<div class="card card-default px-4">
    @if (count($rating) > 0)
    <div class="card-body mt-4 p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Rating Customer</th>
                    <th>Komentar Customer</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($rating as $ratings)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ratings->nama }}</td>
                <td>{{ $ratings->rating }}</td>
                <td>{{ $ratings->komentar }}</td>
                <td class="d-flex flex-col gap-3 justify-items-center">
                    <a class="btn  btn-warning" href="{{ route('rating.edit', $ratings->id) }}">Ubah</a>
                    <form method="post" action="{{ route('rating.delete', $ratings->id) }}" style="display: inline-block;">
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
        <p>Tidak ada Data Rating Customer</p>
    @endif
</div>
@endsection