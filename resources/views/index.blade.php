    @auth
    <!-- <p class="lead">{{auth()->user()->type}}</p> -->

    

    <h1>ล็อกอินแล้ว</h1>

    <a href="{{ route('logout') }}" class="btn btn-outline-primary mt-3" style="margin-left:3%;" >logout</a>
    @if(auth()->user()->type==1)
    <a class="btn btn-primary" href="{{ route('users.index') }}">user Index</a>
    <a class="btn btn-primary" href="{{ route('backoffices.index') }}">backoffice</a>
    <a href="{{ url('departments') }}" target="iframe">สาขาวิชา</a>
    @endif


    @endauth


    @guest
    <h1>ยังไม่ล็อกอิน</h1>
    
    <div>
    <a href="{{ route('login') }}" class="btn btn-outline-primary mt-3" style="margin-left:3%;" >register</a>
    <a href="{{ route('login') }}" class="btn btn-outline-danger mt-3" >login</a>
    </div>
    @endguest