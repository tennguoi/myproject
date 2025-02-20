<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookingController;

// Route mặc định hiển thị trang home trước
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dang-ky-kham', [BookingController::class, 'showForm'])->name('booking.form');
Route::post('/dang-ky-kham', [BookingController::class, 'submitForm'])->name('booking.submit');

// Route đăng nhập
Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Kiểm tra thông tin đăng nhập (có thể thay bằng logic kiểm tra CSDL)
    if ($email === "admin@example.com" && $password === "123456") {
        return redirect()->route('home'); // Chuyển hướng về trang home nếu đăng nhập thành công
    } else {
        return back()->with('error', 'Email hoặc mật khẩu không đúng!');
    }
})->name('login.post');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');


