@extends('layouts.base')
@section('title')
create product
@endsection
@section('content')
        <div class="container">
        <h2 class="my-3">Create Product</h2>
        <form class="container p-5" style="background-color: #e3f2fd;" method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')
            <div class="row mb-5">
                <div class="col-4">
                  <label for="exampleFormControlTextarea1" class="form-label">Name</label>
                  <input type="text" class="form-control" required name="name" placeholder="Name" aria-label="Product name">
                </div>
                <div class="col">
                  <label for="exampleFormControlTextarea1" class="form-label">Quantity</label>
                  <input type="text" class="form-control" required name="quantity" placeholder="Quantity" aria-label="Product Quantity">
                </div>
                <div class="col">
                  <label for="exampleFormControlTextarea1" class="form-label">Price</label>
                  <input type="text" class="form-control" required name="price" placeholder="Price" aria-label="Product Price">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit">Add</button>
            </div>
          </form>
        </div>
@endsection
