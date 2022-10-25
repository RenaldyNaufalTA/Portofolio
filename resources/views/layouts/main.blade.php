<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!--CSS LAINNYA-->
    <style>
        /* mencoba CSS MURNI */
        * {
            margin: 0;
            font-family: sans-serif;
        }

        .navbar {
            background-color: blue;
            padding: 20px;
        }

        .navbar-brand,
        .collapse {
            padding: 5px;
            display: inline-flex;
            text-decoration: none;
            color: white;
        }

        .collapse {
            float: right;
        }

        .navbar-nav {
            padding: 0 5px;
        }

        .navbar-nav a {
            margin: 0 10px;
            text-decoration: none;

        }

        .jumbotron {
            text-align: center;
        }

        #img {
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .jumbotron h1,
        p {
            font-family: sans-serif;
            margin: 10px 0;
        }

        footer {
            background-color: blue;
            text-align: center;
            padding: 10px;
            color: white;

        }

        footer p a {
            text-decoration: none;
            color: white;

        }

        /* Akhir CSS MURNI */

        #img {
            object-fit: cover;
            object-position: 100% 0;


        }

        .jumbotron {
            padding: 6rem 1rem;
            background: #e2edff;

        }

        .nav-link {
            color: white;
        }

        #projects {
            background: #e2edff;
        }

        section {
            padding-top: 5rem;
        }
    </style>

    <title>@yield('title')</title>
</head>

<body id="home">
    @include('partials.navbar')
    @yield('content')


    @include('partials.footer')
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

</body>

</html>
