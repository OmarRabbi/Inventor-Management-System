@extends('layouts.base') @section('title','register') @section('content')
<form method="post" action="{{ route('user.submitregister') }}">
    @csrf @method('post')
    <h3 style="text-align: center; margin-top: 20px">Register Form</h3>

    <div
        class="container d-grid gap-2 col-6 mt-lg-3 p-4"
        style="background-color: #e3f2fd"
    >
        @if (session()->has('registration_success'))
        <div
            class="alert alert-success alert-dismissible fade show"
            role="alert"
        >
            {{ session("registration_success") }}
        </div>
        @elseif (session()->has('email_info'))
        <div
            class="alert alert-primary alert-dismissible fade show"
            role="alert"
        >
            {{ session("email_info") }}
        </div>
        @elseif (session()->has('name_info'))
        <div
            class="alert alert-primary alert-dismissible fade show"
            role="alert"
        >
            {{ session("name_info") }}
        </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">User Name</label>
            <input
                type="text"
                name="name"
                placeholder="ariyan01"
                class="form-control"
                id="exampleInputName1"
                required
                aria-describedby="nameHelp"
            />
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input
                type="email"
                name="email"
                placeholder="abc@gmail.com"
                class="form-control"
                id="exampleInputEmail1"
                required
                aria-describedby="emailHelp"
            />
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
                >Password</label
            >
            <input
                type="password"
                name="password"
                class="form-control"
                id="exampleInputPassword1"
                required
            />
        </div>
        <p>
            Already have an account
            <a href="{{ route('user.login') }}">Login</a>
        </p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
