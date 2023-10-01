<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>Ticket App</title>
</head>

<body>
    @include('partials.navbar')

    <section class="w-32 min-w-max max-w-screen-xl mx-auto mt-10">
        @yield('container')
    </section>

</body>

</html>
