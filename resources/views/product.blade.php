@extends('product-layout')

@section('content')
<div class = 'container'>
    <h1>{{ $product['product_name'] }}</h1>
    <p>{{ $product['product_desc'] }}</p>
    <a href="/">GO ome</a>
</div>
@endsection