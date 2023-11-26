<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- vite仕様 -->
    @vite(['resources/css/app2.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--BoxIcons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<header class="header"></header>
    <div class="header-wapper">
        <h1 class="logo">
            WebSiteLogo
        </h1>
        <nav class="nav">
            <ul>
                <li class="">item00</li>
                <li class="">item00</li>
                <li class="">item00</li>
                <li class="">item00</li>
                <li class="">item00</li>
                <li class="">item00</li>
            </ul>
        </nav>
    </div>
</header>

{{-- ヒーローセクション START--}}
    <section class="section-01">

    </section>
{{-- ヒーローセクション END --}}
    <section class="section-02"></section>
    <section class="section-03"></section>
    <section class="section-04"></section>

    <footer></footer>

</body>

</html>
