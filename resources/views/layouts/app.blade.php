<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Medical & Health</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header>
    <div class="logo">Hệ Thống Quản Lý Hồ Sơ Y Tế CMC</div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Trang chủ</a></li>
            <li><a href="{{ route('booking.form') }}" class="{{ request()->routeIs('booking.form') ? 'active' : '' }}">Đặt lịch khám</a></li>
            <li><a href="#">Tra cứu thông tin</a></li>
            <li><a href="#">Tra cứu hóa đơn</a></li>
            <li><a href="#">Lịch sử khám bệnh</a></li>
            <li><a href="#">Báo cáo và thống kê</a></li>
            <li><a href="{{ route('login') }}">Đăng ký/Đăng nhập</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

</body>
</html>
