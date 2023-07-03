<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.min.css">
    <title>Document</title>
</head>
<body>
<style>
  body{
    margin: 0px;
    padding: 0px;
  }
  .row{
    margin: 0px;
    padding: 0px;
  }
</style>
<div class="b-example-divider"></div>

<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <button class="btn btn-dark"><a href="{{route('yaro')}}" class="nav-link px-2 text-white">Accuiel</a></button>
        <button class="btn btn-dark"><a href="{{route('liste')}}" class="nav-link px-2 text-white">List des etudiants</a></li>
      </ul>
    </div>
  </div>
</header>
<br>
      

@yield('page-content')

</div>
<div class="bg-dark text-center p-4 mt-3">
  <p class="text-white">
    Tous les droits sont reserveees 2023
  </p>

</div>

<script src="{{ asset('js/bootstrap.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.all.min.js"></script>




</body>
</html>