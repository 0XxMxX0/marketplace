@extends('pages.layout')

@section('title', 'Stock')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Dashboard</h2>
            <div class="col-4 p-4">
                <div class="card">
                    <div class="card-header">
                        Fluxe of Stock
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Entrace: {{$contEntrace}}</h5>
                        <h5 class="card-title">Exit: {{$contExit}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-5 p-4">
                <div class="card">
                    <div class="card-header">
                        Income
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Balance: R${{number_format($income,2,'.',',')}}</h4>
                        <p class="card-text">Entrace: <span class=" fw-bold text-danger">R${{number_format($entrace,2,'.',',')}} </span>| Exit: <span class="text-success fw-bold">R${{number_format($exit,2,'.',',')}}</span></h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
