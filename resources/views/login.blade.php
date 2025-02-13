@extends('layouts.app')

@section('content')

<div class="Hinhnen">
    <div class="Khung">
        <h3 class="text-center text-success" style="text-align: center;">Đăng nhập</h3>

        @if(session('error'))
            <div class="alert alert-danger p-2">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="#" class="text-success" style="margin-left: 40%">Quên mật khẩu?</a>
            </div>
            <br>

            <button type="submit" class="btn btn-success w-100 mt-3" style="margin-left: 40%">Đăng nhập</button>
        </form>

        <p class="mt-3 text-center" style="margin-left: 25%">
            Bạn chưa có tài khoản? <a href="#" class="text-success" style="margin-left: 10px">Đăng ký ngay</a>
        </p>
    </div>
    </div>
@endsection
