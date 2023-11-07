@extends('pages.layout')
@section('title', 'Register Sale')
@section('content')

    <script>
        function addProductList() {

            let container = document.querySelector('#container-listProduct');

            let col = document.createElement('div');
            col.className = 'col-8';

            let formFloating = document.createElement('div');
            formFloating.className = 'form-floating';

            let select = document.createElement('select');
            select.className = 'form-select';
            select.id = 'id_stock[]';
            select.name = 'id_stock[]';
            select.setAttribute('onclick', 'getTotalPrice()');
            select.innerHTML = '';

            @foreach($products as $product)
                let option = document.createElement('option');
                option.value = {{$product->id}};
                option.setAttribute('price', {{$product->price / $product->amount}});
                option.text = '{{$product->name}}';
                select.appendChild(option);
            @endforeach

            let label = document.createElement('label');
            label.setAttribute('for','product');
            label.innerText = 'Product';

            formFloating.appendChild(select);
            formFloating.appendChild(label);
            col.appendChild(formFloating);
            container.appendChild(col);

        }
    </script>

    <div class="container">

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="bi bi-x-circle-fill"></i>
                    &nbsp{{ $error }}
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Register Sale</h3>
            <div class="row">
                <div class="col-6">
                    <div id="container-listProduct" class="row g-2 mb-1">
                        <div class="col-8">
                            <div class="form-floating">
                                <select  onchange="getTotalPrice(this)" class="form-select" id="id_stock[]" name="id_stock[]">
                                    <option selected>Select product</option>
                                    @foreach($products as $product)
                                        <option id="1" price='{{$product->price / $product->amount}}' value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelectGrid">Product</label>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-floating">
                                <select  onchange="getTotalPrice(this)" class="form-select" id="id_stock[]" name="id_stock[]">
                                    <option selected>Select product</option>
                                    @foreach($products as $product)
                                        <option id="2" price='{{$product->price / $product->amount}}' value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelectGrid">Product</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-5">
                            <a onclick="addProductList()" class="text-primary">Add new product a car</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group" aria-label="format ">
                        <button type="submit" class="btn btn-outline-dark">Register Entrace</button>
                        <a href="{{route('back.stock.product') }}" type="button" class="btn btn-dark">Cancel</a>
                    </div>
                </div>
                <div class="col-6 border-start">
                    <h3 >Total: R$<span id="priceTotal">00,00</span></h3>
                </div>
            </div>
        </form>
    </div>
@endsection





