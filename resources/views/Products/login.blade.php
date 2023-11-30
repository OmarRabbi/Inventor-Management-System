@extends('layouts.base')
@section('title', 'Login')
@section('content')
    <form method="post" action="{{route('user.submitlogin')}}">
        @csrf
        @method('post')
        <h3 style="text-align: center; margin-top:40px;">Login Form</h3>
        <div class="container d-grid gap-2 col-6 mt-lg-3 p-4" style="background-color: #e3f2fd;">
            @if (session()->has('error'))
        <div
            class="alert alert-danger alert-dismissible fade show"
            role="alert"
        >
            {{ session("error") }}
        </div>
        @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" placeholder="abc@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <p>Don't have an account? <a href="{{route('user.register')}}">Register</a></p>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection
