@extends('auth.master.master')

@section('title', 'Welcome')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Laravel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/cover/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
    </div>
  </header>

  <main role="main">
    <h1 class="cover-heading">Sistema de gestión de actividades Uady
</h1>
    <p class="lead">¿Eres encargado o becario?</p>
    <p class="lead">
    <a href="log" class="btn btn-lg btn-secondary">Encargado</a>
      <a href="log2" class="btn btn-lg btn-secondary">Becario</a>
    </p>

  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
    </div>
  </footer>
</div>
</body>
</html>
@endsection