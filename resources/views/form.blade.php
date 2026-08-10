@extends('layout')

@section('title')
    เขียนแจ้งเคลม
@endsection

@section('content')
    <h2 class="text-center py-2">แบบฟอร์มส่งข้อมูลแจ้งเคลมสินค้าชำรุด</h2>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">รหัสสินค้า: </label>
            <input type="text" name="serial_number" class="form-control">
        </div>
        @error('serial_number')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="title">อีเมลผู้ติดต่อ: </label>
            <input type="text" name="email" class="form-control">
        </div>
        @error('email')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="title">อาการชำรุด: </label>
            <textarea name="problem" class="form-control" cols="50" rows="5"></textarea>
        </div>
        @error('problem')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="title">ระดับควาามเร่งด่วน: </label>
            <select name="priority" class="form-control">
                <option value="">--โปรดเลือก--</option>
                <option value="">มากที่สุด</option>
                <option value="">มาก</option>
                <option value="">ปานกลาง</option>
                <option value="">น้อย</option>
                <option value="">น้อยที่สุด</option>
            </select>
        </div>
        @error('priority')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="{{ route('blogs') }}" class="btn btn-secondary my-3">บทความทั้งหมด</a>
    </form>
@endsection
