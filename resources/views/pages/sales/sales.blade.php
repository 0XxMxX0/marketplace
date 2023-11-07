@extends('pages.layout')

@section('title', 'Sales')
@section('content')
    <div class="container">
        @include('includes.message')

        @if($sales->count())
            <ul class="nav p-2 justify-content-between rounded align-items-center border bg-body-tertiary">
                <li class="nav-item">
                    <h3>Sales</h3>
                </li>
                <li class="nav-item">
                    <a href="{{route('sales.create')}}" class="btn btn-outline-dark active"
                       aria-current="page">Register Sales</a>
                </li>
            </ul>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">total</th>
                    <th scope="col">Product</th>
                    <th scope="col">Date created</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        @else
            <div class="text-center mt-4">
                <h1>Not Found Sales</h1>
                <a href="{{route('sales.create')}}" class="btn mt-2 btn-outline-success active"
                   aria-current="page">Register Sales</a>
            </div>
        @endif
{{--        <nav>--}}
{{--            <ul class="pagination">--}}
{{--                {!! $sales->links() !!}--}}
{{--            </ul>--}}
{{--        </nav>--}}
    </div>
@endsection


