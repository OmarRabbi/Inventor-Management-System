<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>inventory management system | @yield('title')</title>
    <style>
      body {
          display: flex;
          flex-direction: column;
          min-height: 100vh;
          background-color: #c9ecf3;
      }
  </style>
  
</head>
<body>
    <nav class="navbar navbar-expand-lg p-3" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('product.index')}}">(IMS)Inventory Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('product.index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('product.create')}}">Add Product</a>
              </li>
          </div>
          @if (Auth::check())
          <div class="d-grid gap-3 col-2 mx-auto" style="text-align:center;">
            <form method="post" action="{{route('user.logout')}}">
                @csrf 
                @method('delete')
            <a href="/logout/"><button class="btn btn-danger" type="submit">Logout</button></a>
            </form>
        </div>
        @endif
        </div>
      </nav>
    <main class="flex-grow-1">@yield('content')</main>
    <footer class="text-center py-3" style="background-color: #e3f2fd;">
      <div class="container">
          <p>&copy; 2023 Your Company. All rights reserved.</p>
      </div>
  </footer>     
</body>
<script>
    setTimeout(function() {
        document.querySelector('.alert').remove();
    }, 3000);
</script>
</html>