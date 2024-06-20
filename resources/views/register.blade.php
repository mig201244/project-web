@include('layout')

<form class="container" method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" placeholder="Name">

            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email">

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password">
        </div>
            <!-- <input class="form-container" type="email" name="email" placeholder="Email"> -->
            <!-- <input type="password" name="password" placeholder="Password"> -->
            <button type="submit" style="margin-top:3%;" >register</button>
        </form>

<a href="." class="btn btn-outline-primary mt-3" style="margin-left:3%;" >กลับหน้าหลัก</a>
<a href="login" class="btn btn-outline-danger mt-3" >login</a>