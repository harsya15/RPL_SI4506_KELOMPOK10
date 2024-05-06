@extends('layouts.adminPage.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<a href="/Menu/create" type="button" class="btn btn-primary mt-4 ms-4">Tambah</a>
<div class="px-4">
    <div class="mt-4">
        @if (count($menu) > 0)
        <table class="table table-bordered mb-0">
            <thead class="table-danger align-middle">
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Deskripsi Menu</th>
                    <th>Kategori Menu</th>
                    <th>Harga Menu</th>
                    <th>Gambar Menu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $no = 1 ?>
                @foreach($menu as $menus)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td style="width : 250px">{{ $menus->nama_menu }}</td>
                    <td>{{ $menus->deskripsi_menu }}</td>
                    <td>{{ $menus->kategori_menu }}</td>
                    <td>{{ $menus->harga_menu }}</td>
                    <td>
                        <img src="{{asset('uploads/menu/'.$menus->gambar_menu)}}" style="max-width:200px">
                    </td>
                    <td class="d-flex flex-col gap-3 justify-items-center">
                        <a class="btn btn-warning" href="{{ route('Menu.edit', $menus->id) }}">Ubah</a>
                        <form method="post" action="{{ route('Menu.delete', $menus->id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<p>Tidak ada makanan dan minum di menu ini.</p>
@endif
@endsection