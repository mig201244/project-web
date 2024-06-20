@auth
@if(auth()->user()->type==1)

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ฝ่ายงาน</title>
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
                    <h2>ฝ่ายงาน</h2>
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
                    <th>ฝ่ายงาน</th>
                    <th>คณะ</th>
                    
                    <th width="280px">แก้ไข และลบข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id_department }}</td>
                        <td>{{ $department->n_department }}</td>
                        <td>{{ $department->n_faculty }}</td>
                        
                        <td>
                            <form action="{{ route('departments.destroy',$department->id_department) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('departments.edit',$department->id_department) }}">แก้ไข</a>
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
        <br>
        <div class="pull-right mb-2" Align=right>
            <a class="btn btn-success" href="{{ route('departments.create') }}"> เพิ่มฝ่ายงาน</a>
            <input type="button" onclick="window.location.reload()" class="btn btn-success" value="รีเฟรช ">
            <!-- <a class="btn btn-success" href="{{ route('backoffices.index') }}"> Back</a> -->
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