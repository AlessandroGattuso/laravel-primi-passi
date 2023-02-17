<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel-primi-passi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($pages as $page)
                  <li class="nav-item">
                    @if($page == $page_chosen)
                        <a class="nav-link active" aria-current="page" href="{{route($page)}}">{{ucfirst($page)}}</a>
                    @else
                        <a class="nav-link" aria-current="page" href="{{route($page)}}">{{$page}}</a>
                    @endif
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </nav>
        <div class="container d-flex justify-content-center align-items-center vh-100">
          @foreach($pages as $page)       
              @if($page == $page_chosen)
                <h1>This is {{$page}} page</h1>
              @endif      
          @endforeach
        </div>
    </body>
</html>
