<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    {{-- link css local --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    {{-- link icon gambar header --}}
    <link rel="icon" href="{{ asset('assets/images/icons/logo.png') }}">

    {{-- link template admin --}}

    <!--     Fonts and icons     -->

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="{{ asset('https://kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css.map') }}" rel="stylesheet">
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
    {{-- link icon gambar header --}}
    <link rel="icon" href="{{ asset('assets/images/icons/logo.png') }}">


    <title>SIBANGUN</title>
</head>

<body class="g-sidenav-show   bg-gray-100">



    @yield('container')




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- script js local --}}
    <script src="assets/js/script.js"></script>

    {{-- script template admin --}}
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}assets/js/plugins/smooth-scrollbar.min.js">
    </script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="{{ asset('https://buttons.github.io/buttons.js') }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.0') }}"></script>


</body>

</html>
