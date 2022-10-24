<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <base href="../template/"> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    @include('layouts.admin.script.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.admin.partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Page Heading -->
                @include('layouts.admin.partials.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Begin Page Content -->
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title-page')</h1>
                        @yield('button')
                    </div>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            @include('layouts.admin.partials.footer')
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts.admin.partials.logoutmodal')

    @include('layouts.admin.script.js')


</body>

</html>
