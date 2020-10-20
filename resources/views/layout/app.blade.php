<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.all.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}">
</head>
<body class="app sidebar-mini">

    @guest
        @yield('login-page')
    @else
        <!-- Navbar-->
        @include('includes.header')

        <!-- Sidebar menu-->
        @include('includes.sidenav')

        <main class="app-content">
            @yield('page-content')
        </main>
    @endguest

    @include('sweetalert::alert')

    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('backend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#datatable').DataTable({
            "ordering" : false
        });
    </script>

</body>
</html>
