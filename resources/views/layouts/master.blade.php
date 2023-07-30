<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITWaYBD</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap4.min.css') }}">
    <style>
        a:link {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="text-center d-flex justify-content-center mb-5">
        <h2><a href="{{ route('home') }}">Home</a></h2>
        <h2 style="margin-left: 10px; background-color: red; color:white;">ItWayBD Best Company</h2>
    </div>
    <div class="text-center d-none" id="notify">
        <p class="text-bold"></p>
    </div>
    <hr>
    <div class="container">
        @yield('main')
    </div>
    <script src="{{ asset('assets/jquery/jquery3.7.0.js') }}"></script>
    @stack('js')
</body>
</html>