<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">

    {{-- font style --}}
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=M PLUS Rounded 1c' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=M PLUS 1' rel='stylesheet'>

    {{-- main css --}}
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    @yield('css')
</head>
<body>

    @include('partials.navbar')

    {{-- <div class="content">
    </div> --}}
    @yield('content')

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    {{-- bootstrap js --}}
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')

    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</body>
</html>
