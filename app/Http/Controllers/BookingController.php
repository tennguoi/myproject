<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showForm()
    {
        return view('booking'); // Gọi giao diện booking.blade.php
    }

    public function submitForm(Request $request)
    {
        // Xử lý dữ liệu khi gửi form
        return back()->with('success', 'Đăng ký thành công!');
    }
}
