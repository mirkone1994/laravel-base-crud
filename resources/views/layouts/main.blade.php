<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('includes.header')
    <main class="container">
        <section id="@yield('section-id')">
            <div class="card main-card my-5 p-5">
                @yield('content')
            </div>
        </section>
    </main>

    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>