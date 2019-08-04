<!DOCTYPE html>
<html lang="en">
<head>

    @include('user.default.meta')

    @include('user.default.css')
    
    @yield('css')

</head>
<body data-spy="scroll" data-target="#travelnavbar" data-offset="0">

    @include('user.default.nav')

    @yield('content')

    @include('user.default.script')

</body>
</html>