<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- link css --}}
    @include('layout.style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <header>
            <div class="header-main">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Trang chủ</a>
                      <a class="navbar-brand" href="{{ url('product') }}">Dach sách sản phẩm</a>
                      <a class="navbar-brand" href="#">Danh mục sản phẩm</a>
                      <a class="navbar-brand" href="#">Navbar</a>
                    </div>
                  </nav>
            </div>
        </header>
        <section class="content mt-5">
            <div class="col-6 m-auto">
                @yield('content')
            </div>
        </section>
        <footer class="text-center" >
            <h1>MC vô địch</h1>
        </footer>
    </div>
</body>
</html>