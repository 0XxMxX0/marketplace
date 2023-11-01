@extends('pages.layout')

@section('title', 'details')
@section('content')
    <div class="container">
        <form action="{{route('stock.create')}}" method="post" enctype="multipart/form-data">
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
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
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
                            @foreach($typeRegister as $type)
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
                <a href="{{route('stock.cancelAction', ['message'=> 'Create product cancel', 'typeAlert' => 'warning', 'icon' => 'bi-x-circle-fill'])}}" type="button" class="btn btn-dark">Cancel</a>
            </div>
        </form>
    </div>
@endsection


