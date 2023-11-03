@extends('pages.layout')

@section('title', 'Stock')
@section('content')
    <div class="container">
        @include('includes.message')

        @if($stock->count())
            <ul class="nav p-2 justify-content-between rounded align-items-center border bg-body-tertiary">
                <li class="nav-item">
                    <h3>Products</h3>
                </li>
                <li class="nav-item">
                    <a href="{{route('stock.products.create')}}" class="btn btn-outline-dark active"
                       aria-current="page">Create</a>
                </li>
            </ul>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type-Registe</th>
                    <th scope="col">Date created</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($stock as $productsDetails)
                    <tr>
                        <th scope="row">{{$productsDetails->id}}</th>
                        <td>{{$productsDetails->name}}</td>
                        <td>R$ {{number_format($productsDetails->price,2,',','.')}}</td>
                        <td>{{$productsDetails->amount}}</td>
                        <td>{{Str::limit($productsDetails->description, 27)}}</td>
                        <td>{{ $productsDetails->type->name}}</td>
                        <td>{{date_format($productsDetails->created_at,'d-m-Y')}}</td>
                        <td class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="{{route('stock.products.show', $productsDetails->id)}}" type="button"
                               class="btn btn-dark text-light">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            @include('pages.stock.products.actions.delete')
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#delete-{{$productsDetails->id}}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @else
            <div class="text-center mt-4">
                <h1>Not Found Product</h1>
                <a href="{{route('stock.products.create')}}" class="btn mt-2 btn-outline-dark active"
                   aria-current="page">Create Product</a>
            </div>
        @endif
        <nav>
            <ul class="pagination">
                {!! $stock->links() !!}
            </ul>
        </nav>
    </div>
@endsection


