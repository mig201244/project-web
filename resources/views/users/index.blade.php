@auth
@if(auth()->user()->type==1)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แก้ไขผู้ใช้งาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="icon" href="img/ENG-LOGO.png" type="image/x-icon">
    <style>
    body {
        font-family: 'MN Khanom Thai Light';
        width: 100%;
        height: 100%;
        margin: 0;
        overflow: hidden;
        /* Hide scrollbars */
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
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered" id="users-list">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>อีเมล</th>
                    <th width="200px">ชื่อผู้ใช้</th>
                    <th>รหัสผ่าน</th>
                    <th width="500px">แก้ไข และลบข้อมูล</th>
                </tr>
            </thead>

            <tbody>
            @php
            $count = 1;
            @endphp
            @foreach ($users as $user)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->password}}</td>
                        <td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">แก้ไข</a>
                                @csrf
                                @method('DELETE')
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                <input name="submit" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก')" type="submit" value="ลบ" />
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="pull-right mb-2" Align=right>
            <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> เพิ่มผู้ใช้งาน</a> -->
            <a class="btn btn-success" href="{{ route('users.create') }}"> เพิ่มผู้ใช้งาน</a>
            <input type="button" onclick="window.location.reload()" class="btn btn-success" value="รีเฟรช ">
            <a class="btn btn-secondary" href="{{ route('welcome') }}"> กลับหน้าหลัก</a>
        </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#users-list').DataTable();
});
</script>
</body>
</html>    

@endif
@endauth

<!-- @guest
@if(auth()->user()->type==0)
    <h1>สำหรับผู้ดูแล</h1>
    <div>
    <a class="btn btn-secondary" href="{{ route('welcome') }}"> กลับหน้าหลัก</a>
    </div>
@endif

@endguest -->