<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>แก้ไขผู้ใช้งาน</title>
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
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>แก้ไขผู้ใช้งาน</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>เลขที่ตำแหน่ง :</strong>
                        <input type="text" name="position_number" value="{{ $user->id }}" class="form-control" placeholder="เลขที่ตำแหน่ง">
                        @error('position_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>อีเมล :</strong>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="E-mail">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชื่อผู้ใช้ :</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="ชื่อผู้ใช้">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>รหัสผ่าน :</strong>
                        <input type="text" name="password" value="รหัสผ่านใหม่" class="form-control" placeholder="รหัสผ่าน">
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="text-right">
                <div class="pull-right">
                    <button type="submit" class="btn btn-outline-info">บันทึก</button>
                    <a class="btn btn-outline-info" href="{{ route('users.index') }}"> ย้อนกลับ</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>