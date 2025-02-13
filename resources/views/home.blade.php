@extends('layouts.app')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1><span class="highlight">Đặt lịch khám</span></h1>
        <p>Hỗ trợ khám bệnh và chẩn đoán bệnh chính xác, kịp thời cùng với đội ngũ bác sĩ giỏi, chuyên nghiệp và tận tình.</p>
        <button class="btn">Đặt ngay</button>
    </div>
    <img src="{{ asset('Img/thiet-ke-benh-vien-115c-1024x576.jpg') }}" alt="Doctor" class="anh1">
</div>

<div class="services">
    <div class="service">
        <i class="fa-regular fa-calendar-days fa-2xl" style="color: #000000;"></i>
        <h3>Kiểm tra Lịch Hẹn</h3>
        <p>Cập nhật thông tin lịch hẹn.</p>
    </div>
    <div class="service highlighted">
        <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #000000;"></i>
        <h3>Tra Cứu Thông Tin</h3>
        <p>Tìm kiếm thông tin cá nhân, hồ sơ y tế</p>
    </div>
    <div class="service">
        <i class="fa-solid fa-money-bill-1-wave fa-2xl" style="color: #000000;"></i>
        <h3>Thanh Toán Hóa Đơn</h3>
        <p>Danh sách hóa đơn cần thanh toán</p>
    </div>
</div>
@endsection
