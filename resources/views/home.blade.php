@extends('layouts.app')

@section('content')
<!-- <div class="hero">
    <div class="hero-content">
        <h1><span class="highlight">Đặt lịch khám</span></h1>
        <p>Hỗ trợ khám bệnh và chẩn đoán bệnh chính xác, kịp thời cùng với đội ngũ bác sĩ giỏi, chuyên nghiệp và tận tình.</p>
        
      
        <a href="{{ route('booking') }}" class="btn">Đặt ngay</a>
        
        
        
    </div>
    <img src="{{ asset('Img/thiet-ke-benh-vien-115c-1024x576.jpg') }}" alt="Doctor" class="anh1">
</div> -->
<section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Chăm sóc sức khỏe chất lượng cao</h1>
                    <p>Với đội ngũ bác sĩ giàu kinh nghiệm và trang thiết bị hiện đại, chúng tôi cam kết mang đến dịch vụ y tế tốt nhất cho bạn.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('booking') }}" class="btn">Đặt ngay</a>
                        <button class="btn-outline">Tìm hiểu thêm</button>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="Img/thiet-ke-benh-vien-115c-1024x576.jpg" alt="Hospital">
                </div>
            </div>
        </div>
    </section>

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
<footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h4>Về chúng tôi</h4>
                    <p>Bệnh viện Quốc tế - Nơi chăm sóc sức khỏe toàn diện và chuyên nghiệp cho mọi người.</p>
                </div>
                <div class="footer-column">
                    <h4>Liên hệ</h4>
                    <p><i class="fas fa-map-marker-alt"></i>123 Đường ABC, Quận XYZ</p>
                    <p><i class="fas fa-phone"></i>0123.456.789</p>
                    <p><i class="fas fa-envelope"></i>info@benhvien.com</p>
                </div>
                <div class="footer-column">
                    <h4>Dịch vụ</h4>
                    <ul>
                        <li><a href="#">Khám chuyên khoa</a></li>
                        <li><a href="#">Cấp cứu</a></li>
                        <li><a href="#">Xét nghiệm</a></li>
                        <li><a href="#">Chẩn đoán hình ảnh</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Theo dõi chúng tôi</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
