<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark border-bottom">
    <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <span class="fs-4"> First site</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/">Main</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">About us</a>

    </nav>
    <a class="btn btn-warning" href="/review">Feedback</a>
</div>
<div class="container"
@yield('main_content')
{{--та часть которая не будет повторяться а будет встраиваться другой контент--}}
</div>

</body>
</html>
