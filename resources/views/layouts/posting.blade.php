<html lang="ja" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        @include('layouts.header')
        <main class="content-wrapper" style="min-height: 665px;">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="fs-2 my-3">@yield('title')</h1>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>