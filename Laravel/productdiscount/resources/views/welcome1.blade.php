@extends('layouts.master')
@section('content')

{{-- @foreach ($datas as $key=>$value)
<p>{{ $value }}</p>
@endforeach --}}
<hr>
<h2>Result:</h2>
<p>Product description: <strong> {{ $des }} </strong></p>
<p>Price: $<strong>{{ $price }} </strong></p>
<p>Discount Percent: <strong> {{ $dis }} </strong>%</p>
<p>Discount Amount: $<strong>{{ $disAmount }}</strong></p>
<p>Discount Price: $<strong>{{ $disPrice }}</strong></p>
@endsection
