@extends('layouts.master')
{{-- @section('content') --}}
{{-- <h1>Hello Word!! {{ $name }}</h1>
<h1>I'm {{ $age }} years old</h1>
@if ($age >20)
<p>{{ $name }} du tuoi di hoc</p>
@else
<p>{{ $name }} chua du tuoi di hoc</p>
@endif
@for ($i = 0; $i < 5; $i ++)
<p>{{ $i + 1}}</p>
@endfor
@foreach ($users as $key => $user)
<p>{{ $key }} => {{ $user }}</p>
<hr>
<h2>Result:</h2>
<p>Product description: <strong> {{ $des }} </strong></p>
<p>Price: <strong>{{ $price }} </strong></p>
<p>Discount Percent: <strong> {{ $dis }} </strong>%</p>
<p>Discount Amount: <strong>{{ $disAmount }}</strong></p>
<p>Discount Price: <strong>{{ $disPrice }}</strong></p>

@endsection
{{-- <div class="container">
    @yield('content')
</div>
@include('partials.js') --}}


