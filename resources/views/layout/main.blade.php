<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="h1 d-flex justify-content-center p-3 bg-warning text-white">Giant Book Supplier</div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item "><a class="nav-link text-primary" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                      </a>
                      <ul class="dropdown-menu">
                        @if( isset($categories) && count($categories) >= 1)
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="/book-category/{{$category->id}}">{{$category->name}}</a></li>
                        @endforeach
                    @else
                    <div>Category is empty</div>
                    @endif
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-primary" href="/book/publisher/1">Publisher</a></li>
                    <li class="nav-item"><a class="nav-link text-primary" href="/contact">Contact</a></li>
                </div>
            </div>
        </div>
    </nav>
    @yield('container')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="bg-primary text-white d-flex justify-content-center">@ Happy Book Store 2022</div>
        </div>
    </div>
  </body>
</html>
