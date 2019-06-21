<!<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Shop Laravel</title>
    <script src="/assets/js/jquery-3.4.1.min.js" defer></script>
    <script src="/assets/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/font-awesome.min.css">
</head>
<body>
<header>
    <a href="#">註冊</a>
    <a href="#">登入</a>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <a href="#">聯絡我們</a>
</footer>
</body>
</html>

