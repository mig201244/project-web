<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>เพิ่มผู้ใช้งาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="img/ENG-LOGO.png" type="image/x-icon">
    <style>
    body {
        font-family: 'MN Khanom Thai Light';
        width: 100%;
        height: 100%;
        margin: 0;
    }
    </style>
    
</head>

<body>
<form method="post" action="{{ route('register') }}">

<div class="container my-auto">
<div class="page-header min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto ">
            <div class="card card-plain">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <h1 class="h3 mb-3 fw-normal" Align=center>ลงทะเบียน</h1>

                <div class="card-body">
                    <form role="form" class="text-start">

                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="position_number"
                                value="{{ old('position_number') }}" placeholder="Position_number"
                                required="required" autofocus>
                            <label for="floatingPositionNumber">เลขที่ตำแหน่ง</label>
                            @if ($errors->has('position_number'))
                            <span class="text-danger text-left">{{ $errors->first('position_number') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="name@example.com" required="required" autofocus>
                            <label for="floatingEmail">อีเมล</label>
                            @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Name" required="required" autofocus>
                            <label for="floatingName">ชื่อผู้ใช้</label>
                            @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password"
                                value="{{ old('password') }}" placeholder="Password" required="required">
                            <label for="floatingPassword">รหัสผ่าน</label>
                            @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" placeholder="Confirm Password"
                                required="required">
                            <label for="floatingConfirmPassword">ยืนยันรหัสผ่าน</label>
                            @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>

                        <button class="w-100 btn btn-lg btn-secondary " type="submit">ลงทะเบียน</button>
                    </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                        คุณมีบัญชีอยู่แล้ว ?
                        <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">เข้าสู่ระบบ</a>
                        <a class="btn btn-outline-info" href="{{ route('users.index') }}"> ย้อนกลับ</a>
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>

</html>