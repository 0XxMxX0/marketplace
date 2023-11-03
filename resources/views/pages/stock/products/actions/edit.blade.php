@extends('pages.layout')
@section('title', 'details')
@section('content')
<form action="{{route('stock.products.update', $product->id)}}" method="post">
@csrf
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="bi bi-x-circle-fill"></i>
                <div>
                    @foreach ($errors->all() as $error)
                        &nbsp{{ $error }}
                    @endforeach
                </div>
            </div>
        @endif

        <h2>Edit product</h2>
        @if($product)
            <input type="hidden" id="id" name="id" value="{{$product->id}}">
            <div class="row g-2 mb-1">
                <div class="col-5">
                    <div class="form-floating">
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$product->name}}">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <div class="form-floating">
                            <input required type="text" class="form-control" id="price" name="price" placeholder="Price" onkeyup="formartInputForPrice(this)" value="{{number_format($product->price,2,'.',',')}}">
                            <label for="name">Price</label>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <input required type="text" class="form-control" id="amount" name="amount" placeholder="Amount" value="{{$product->amount}}">
                        <label for="name">Amount</label>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <select required class="form-select" id="id_typeRegister" name="id_typeRegister">
                            @foreach($typeRegister as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelectGrid">Type Register</label>
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-floating">
                        <textarea required class="form-control" placeholder="description" id="description"  name="description" style="height: 100px">{{$product->description}}</textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
            </div>

            <div class="btn-group" role="group" aria-label="format ">
                <button type="submit" class="btn btn-outline-dark">Confirm</button>
                <a href="{{route('back.stock.product') }}" type="button" class="btn btn-dark">Cancel</a>
            </div>
        @endif
    </div>
</form>
@endsection


