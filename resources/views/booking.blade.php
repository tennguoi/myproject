@extends('layouts.app')

@section('content')
<div class="booking-container">
    <h2 class="title">ĐĂNG KÝ KHÁM BỆNH</h2>

    <form action="{{ route('booking.submit') }}" method="POST">
        @csrf

         <!-- nhập họ tên -->
         <label class="label">* Họ và tên:</label>
        <div >
            <input type="text" placeholder="Nhập họ tên" class="form-control2">
        </div>

        <!-- nhập họ tên -->
        <label class="label">* Số điện thoại:</label>
        <div >
            <input type="text" placeholder="Nhập số điện thoại" class="form-control2">
        </div>

        <!-- Chọn chuyên khoa -->
        <label class="label">* Chọn chuyên khoa:</label>
        <select name="specialty" class="form-control" required>
            <option value="">Chọn chuyên khoa</option>
            <option value="noikhoa">Nội khoa</option>
            <option value="ngoaikhoa">Ngoại khoa</option>
        </select>

        <!-- Chọn loại dịch vụ -->
        <label class="label">* Chọn loại dịch vụ khám:</label>
        <div class="checkbox-group">
            <input type="checkbox" name="service" value="thuong"> Khám thường
            <input type="checkbox" name="service" value="vip"> Khám VIP
        </div>

        <!-- Chọn bác sĩ -->
        <label class="label">* Chọn bác sĩ:</label>
        <select name="doctor" class="form-control" required>
            <option value="">Chọn bác sĩ</option>
            <option value="bs1">Bác sĩ A</option>
            <option value="bs2">Bác sĩ B</option>
        </select>

        <!-- Chọn ngày & giờ -->
        <label class="label">* Chọn ngày - khung giờ muốn khám:</label>
        <input type="datetime-local" name="appointment_time" class="form-control" required>

        <!-- Nhập vấn đề sức khỏe -->
        <label class="label">Nhập vấn đề sức khỏe cần khám:</label>
        <textarea name="health_issue" class="form-control"></textarea>

        <!-- Nút tiếp theo -->
        <button type="submit" class="btn-primary">ĐẶT LỊCH</button>
    </form>
</div>
@endsection
