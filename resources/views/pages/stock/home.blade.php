@extends('pages.layout')

@section('title', 'Stock')
@section('content')
    <div class="container">
        <h2>STOCK</h2>
        <div class="row">
            <div class="col bg-danger">
                <h4>Total products cadastred: {{$product->count()}}</h4>
            </div>
            <div class="col bg-warning">
                <h4>Total entrace: {{$totalEntrace}}</h4>
                <h4>Total Exit: {{$totalEntrace}}</h4>
            </div>
        </div>
    </div>
@endsection
