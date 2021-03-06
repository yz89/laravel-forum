<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Forum</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Laravel App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">首页</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="/">{{ Auth::user()->name }}</a></li>
                    <li>
                        <a href="">
                            <img src="{{ Auth::user()->avatar }}" alt="64x64" class="media-object img-circle" style="width:64px;height:64px">
                        </a>
                    </li>
                    <li><a href="/users/avatar">更换头像</a></li>
                    <li><a href="/logout">退出登录</a></li>
                @else
                    <li><a href="/users/login">登 录</a></li>
                    <li><a href="/users/register">注 册</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
    @yield('content')
</body>
</html>