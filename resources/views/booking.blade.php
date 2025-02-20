@extends('layouts.app')

@section('content')
<div class="booking-container">
    

    <form action="{{ route('booking.submit') }}" method="POST">
        @csrf
        <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Doctor List</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- Liên kết CSS -->
</head>

        <body>

<!-- Header Section -->
<div class="header-container">
    <img src="https://storage.googleapis.com/a1aa/image/TEcxO-taTZ1LHX6vje-AFlQfBep6eeGa6qMg15OE_s8.jpg" 
         alt="Background image of hands holding each other">
    <div class="header-overlay">
        <h1 class="header-title">DANH SÁCH BÁC SĨ</h1>
    </div>
</div>

<!-- Navigation Buttons -->
<div class="nav-buttons">
    <button class="call-btn">
        <i class="fas fa-phone-alt"></i>
        <span>Gọi tổng đài</span>
    </button>
    <button class="appointment-btn">
        <i class="fas fa-calendar-alt"></i>
        <span>Đặt lịch hẹn</span>
    </button>
    <button class="doctor-btn">
        <i class="fas fa-user-md"></i>
        <span>Tìm bác sĩ</span>
    </button>
</div>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <nav>
        <a href="#">Trang chủ</a> &gt; <span>Chuyên gia y tế</span>
    </nav>
</div>

<!-- Search Filters -->
<div class="search-filters">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="filter-group">
            <i class="fas fa-map-marker-alt text-blue-500"></i>
            <select>
                <option>Lựa chọn cơ sở</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fas fa-stethoscope text-blue-500"></i>
            <select>
                <option>Yêu cầu chuyên môn</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fas fa-globe text-blue-500"></i>
            <select>
                <option>Ngôn ngữ</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fas fa-briefcase text-blue-500"></i>
            <select>
                <option>Nghề nghiệp</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fas fa-graduation-cap text-blue-500"></i>
            <select>
                <option>Học hàm</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fas fa-user-graduate text-blue-500"></i>
            <select>
                <option>Học vị</option>
            </select>
        </div>
        <div class="filter-group col-span-1 md:col-span-2 lg:col-span-1">
            <input type="text" placeholder="Nhập tên bác sĩ...">
        </div>
        <div class="col-span-1 md:col-span-2 lg:col-span-1 flex justify-center md:justify-end">
            <button class="search-button">Tìm bác sĩ</button>
        </div>
    </div>
</div>

<!-- Doctor List Section -->
<div class="doctor-list">
    <h2>Danh sách Bác sĩ</h2>
    <!-- Thêm danh sách bác sĩ tại đây -->
</div>

</body>
    </form>
</div>
@endsection
