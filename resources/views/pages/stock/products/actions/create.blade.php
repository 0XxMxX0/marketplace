@extends('pages.layout')
@section('title', 'details')
@section('content')

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

        <form action="{{route('stock.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Create product</h3>
            <div class="row g-2 mb-1">
                <div class="col-5">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="price" name="price" onkeyup="formartInputForPrice(this)"  placeholder="Price">
                            <label for="name">Price</label>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                        <label for="name">Amount</label>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-floating">
                        <select class="form-select" id="id_typeRegister" name="id_typeRegister">
                            @foreach($typeRegisters as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelectGrid">Type Register</label>
                    </div>
                </div>
                <div class="col-10">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="description" id="description"  name="description" style="height: 100px"></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
            </div>

            <div class="btn-group" role="group" aria-label="format ">
                <button type="submit" class="btn btn-outline-dark">Create product</button>
                <a href="{{route('back.stock.product') }}" type="button" class="btn btn-dark">Cancel</a>
            </div>
        </form>
    </div>
@endsection


