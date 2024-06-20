@auth
@if(auth()->user()->type==1)

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลในระบบ</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../css/stylehtml.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/ENG-LOGO.png" type="image/x-icon">
</head>

<style>
aside {
    color: #fff;
    width: 115px;
    padding-left: 80px;
    /* height: 100vh; */
    height: 800px;
    background-image: linear-gradient(30deg, #CC3333, #FF6666);
    border-top-right-radius: 70px;
}

aside a {
    font-size: 18px;
    color: #fff;
    display: block;
    padding: 12px;
    padding-left: 25px;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
}

aside a:hover {
    color: #CC0033;
    background: #fff;
    outline: none;
    position: relative;
    background-color: #fff;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

aside a i {
    margin-right: 5px;
}

aside a:hover::after {
    content: "";
    position: absolute;
    background-color: transparent;
    bottom: 100%;
    right: 0;
    height: 35px;
    width: 35px;
    border-bottom-right-radius: 50%;
    box-shadow: 0 20px 0 0 #fff;
}

aside a:hover::before {
    content: "";
    position: absolute;
    background-color: transparent;
    top: 38px;
    right: 0;
    height: 35px;
    width: 35px;
    border-top-right-radius: 18px;
    box-shadow: 0 -20px 0 0 #fff;
}

aside p {
    margin: 0;
    padding: 40px 0;
}

body {
    font-family: 'MN Khanom Thai Light';
    width: 100%;
    height: 100%;
    margin: 0;
    /* overflow: hidden; */
    /* Hide scrollbars */

}

.social {
    height: 0;
}

.social i:before {
    width: 14px;
    height: 14px;
    font-size: 14px;
    position: fixed;
    color: #fff;
    background: #0077B5;
    padding: 10px;
    border-radius: 50%;
    top: 5px;
    right: 30%;
}
</style>

<body>
    <aside>
        <table width="100%" height="100%">
            <tr>
                <td width="100%">
                    <h1>เมนู</h1>


                    <a href="{{ url('areas') }}" target="iframe">
                        วิทยาเขต
                    </a>


                    <a href="{{ url('faculties') }}" target="iframe">
                        คณะ
                    </a>

                    <a href="{{ url('departments') }}" target="iframe">
                        สาขาวิชา
                    </a>

                    <!-- <a href="{{ url('personels') }}" target="iframe">
                        บุคลากร
                    </a> -->

                    <a href="{{ url('users') }}" target="iframe"><i class="fa fa-user-circle-o"></i>
                        ผู้ใช้
                    </a>

                    <a href="{{ url('/') }}">ย้อนกลับ</a>
                    <br>
                    <header class="p-3 bg-danger text-white">
                <td width="100%" height="100%">
                    <iframe id="tree" name="iframe" src="" width="1305px" height="100%" style="border:none;"></iframe>
                </td>
                </td>
            </tr>
        </table>
    </aside>
</body>

@endif
                    @endauth