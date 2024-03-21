@extends('app')
@section('content')
<div class="row">
    <div>
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
             @csrf
            <label for="username" class="fw-bold">Username</label>
            <input type="username" id="email" class="form-control mb-3" name="username" placeholder="username" required>
            <label for="pass" class="fw-bold">Password</label>
            <input type="password" id="pass" class="form-control mb-3" name="password" placeholder="Password" required>
            <input type="checkbox" id="check" class="form-check-input" name="remember">
            <label class="form-check-label" for="check">Remember me</label>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary px-5 w-100">Login</button>
            </div>
        </form>
        <div class="mt-3 text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></div>
    </div>
</div>
@endsection