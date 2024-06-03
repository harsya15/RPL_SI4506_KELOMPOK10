@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="row">
    <div>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="name" class="fw-bold">Name</label>
            <input type="text" id="name" class="form-control mb-3" name="name" placeholder="Your Name" required>
            <label for="email" class="fw-bold">Email</label>
            <input type="text" id="email" class="form-control mb-3" name="email" placeholder="Your Email" required>
            <label for="password" class="fw-bold">Password</label>
            <input type="password" id="password" class="form-control mb-3" name="password" placeholder="Your Password" required>
            <label for="password-confirm" class="fw-bold">Password Confirmation</label>
            <input type="password" id="password-confirm" class="form-control mb-3" name="password_confirmation" placeholder="Your Password" required>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary px-5 w-100">Daftar</button>
            </div>
        </form>
        <div class="mt-3 text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a></div>
    </div>
</div>
@endsection