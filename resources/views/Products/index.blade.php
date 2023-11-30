@extends('layouts.base')
@section('title')
create product
@endsection
@section('content')
    <div class="container">
        <h2 class="my-3">All Products List</h2>
        @if (session()->has('update_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('update_success') }}
        </div>
    @endif
    @if (session()->has('add_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('add_success') }}
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('delete') }}
        </div>
    @endif
        <hr>
        <table class="table table table-bordered mt-5" style="background-color: #e3f2fd;">
            <thead>
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <div class="d-grid gap-2">
                    <a href="{{route('product.edit',['product'=>$product])}}"><button class="btn btn-primary w-100" type="submit">Edit</button></a>
                    <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
                        @csrf
                        @method('delete')
                        <a><button class="btn btn-danger w-100" type="submit">Delete</button></a>
                    </form>
                </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection