<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.js')
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>