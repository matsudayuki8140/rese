<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/menu.js') }}" defer></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="menu">
            <div class="menu_button"><span></span></div>
            <div class="menu_close"></div>
        </div>
        <h1 class="header-title">Rese</h1>
        @yield('header')
    </header>
    <nav class="sample_menu">
            <ul>
                <li>Home</li>
                <li>Logout</li>
                <li>Mypage</li>
            </ul>
        </nav>
    <main class="main">
        @yield('main')
    </main>
</body>

</html>