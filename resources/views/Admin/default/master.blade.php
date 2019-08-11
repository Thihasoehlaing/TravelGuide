<!DOCTYPE html>
<html lang="en">
<head>

    @include('Admin.default.meta')

    @include('Admin.default.css')

    @yield('css')

</head>
<body>

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        @include('Admin.default.header')

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('Admin.default.sidebar')

        @yield('content')
    </div>
    
    @include('Admin.default.script')

    @yield('script')

</body>
</html>
