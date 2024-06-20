<!-- @include('layout')

        <form class="container" method="POST" action="{{ route('login') }}">
            @csrf
        <div class="login-container">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email">

            <label for="password">Email address</label>
            <input type="password" class="form-control" id="password" placeholder="password">
        </div> -->
            <!-- <input class="form-container" type="email" name="email" placeholder="Email"> -->
            <!-- <input type="password" name="password" placeholder="Password"> -->
            <!-- <button type="submit" style="margin-top:3%;" >Login</button> -->
        <!-- </form> -->

<!-- <a href="register" class="btn btn-outline-primary mt-3" style="margin-left:3%;" >register</a> -->
<!-- <a href="." class="btn btn-outline-danger mt-3" >กลับหน้าหลัก</a> -->
<!-- ................................................................................................... -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login_register.css">
    <title>Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <!-- <p>LOGO .</p> -->
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="{{route('welcome')}}" class="link active">Home</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        
    

        <form class="login-container" id="login" method="POST" action="{{ route('login') }}">
        <!-- <div>
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div> -->
        @csrf
            <div class="top">
                <span>Don't have an account? <div class="btn" id="registerBtn" onclick="register()">Sign Up</div></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="name" id="email" placeholder="Username or Email">
                <i class="bx bx-user"></i>
                
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" id="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            
            <!-- <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div> -->
        </form>

        <!------------------- registration form -------------------------->
        <form class="register-container" id="register" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="top">
                <span>Have an account? <div class="btn" style="margin-left:15px;" id="loginBtn" onclick="login()">Sign In</div></span>
                <header>Sign Up</header>
            </div>
            
            <!-- <div class="two-forms"> -->
                <div class="input-box">
                    <input type="name" class="input-field" name='name' id="name" placeholder="Name">
                    <i class="bx bx-user"></i>
                </div>
                <!-- <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div> -->
            <!-- </div> -->
            <div class="input-box">
                <input type="email" class="input-field" name='email' id="email" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name='password' id="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name='password_confirmation' id="password" placeholder="Confirm Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
            <input type="submit" class="submit" value="Sign Up">
                <!-- <input type="submit" class="submit" value="Register"> -->
            </div>

            
            <!-- <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div> -->
        </form>
    </div>
</div>   


<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

</body>
</html>