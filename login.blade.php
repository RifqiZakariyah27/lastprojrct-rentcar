<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
        <h1 id="well">SELAMAT DATANG</h1>
    </head>
    <body>
        <div class="body"> 
            <div>
            @if(Session::has('pesan'))
                <div>
                    {{ Session('pesan') }}
                </div>
            @endif
                <form action="{{ url('login/cek') }}" method="POST">
                {{ csrf_field() }}
                <div>
                    <h1>Silahkan Login</h1>
                </div>
                <div>
                    <div>
                        <input class="masukkan" type="text" name="username" ="form-control" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div>
                    <div>
                        <input class="masukkan" type="password" name="password" ="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div>
                    <div>
                        <button class="masukkan2" type="submit">SIGN IN</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>

<!-- <div class="card"> 
    <div class="body">
    @if(Session::has('pesan'))
        <div class="alert alert-danger">
            {{ Session('pesan') }}
        </div>
    @endif
        <form action="{{ url('login/cek') }}" method="POST">
        {{ csrf_field() }}
        <div class="msg">
            Sign in to start your session
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">Person</i>
            </span>
            <div class="form-line">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">Lock</i>
            </span>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 p-t-5">
                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                <label for="rememberme">Remember Me</label>
            </div>
            <div class="col-xs-4">
                <button class="btn btn-black bg-pink waves-effect" type="submit">SIGN IN</button>
            </div>
        </div>
        <div class="row m-t-15 m-b--20">
            <div class="col-xs-6">
                <a href="sign-up.html">Register Now!</a>
            </div>
            <div class="col-xs-6 align-right">
                <a href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
        </form>
    </div>
</div> -->
