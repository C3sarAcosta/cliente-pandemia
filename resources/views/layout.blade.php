<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"/>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .form-encabezado {
            margin: 100px auto 10px;
            overflow: hidden;
            text-align: center;
        }
    </style>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Pandemia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('pais/')}}">Paises</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('ciudad/')}}">Ciudades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('caso/')}}">Casos</a>
          </li>
        </ul>
      </nav>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="form-encabezado">
                <h2>@yield('titulo')</h2>
            </div>
        </div>
        <div class="row">
            @yield('contenido')
        </div>
    </div>
</body>
</html>