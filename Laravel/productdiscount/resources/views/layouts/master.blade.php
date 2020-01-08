<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')


<body>
    {{-- @include('partials.header') --}}

    @include('partials.js')
    @include('partials.form')
    <div class="clearfix"></div>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
