<!DOCTYPE html>
<html>

<head>
    <base href="{{ asset('./') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">h</h1>

            </div>
            <h3>欢迎使用 hAdmin</h3>

            <form class="m-t" role="form" action="{{ url('loginLogin') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" name = "username" required="" value="{{ old('username') }}"><span>{{ $errors->first('username') }}</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name = "password" required="" value="{{ old('password') }}"><span>{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="验证码" name="capath" required="" value="{{ old('capath') }}"><span>{{ $errors->first('capath') }} <font color="red">{{ session('error') }}</font></span>
                </div>
                <div class="form-group">
                    <img src="{{ url('loginGetCapath') }}" alt="验证码" width="298" height="28" onclick="this.src='{{ url("loginGetCapath") }}?math='+Math.random()">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


                <p class="text-muted text-center"> <a href="{{ url('loginReset') }}"><small>忘记密码了？</small></a> | <a href="{{ url('registerRegister') }}">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>

    
    

</body>

</html>
