@extends('./layout/header')

@section('page-content')


<div class="card">
  <div class="card-body">

  <form class="form" style="margin: 50px; " action=""  method="post">
    <h1 class="text-center">Inscription</h1>
    <div class="form-floating">
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Nom" required>
      <label for="floatingInput">Nom</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control mt-3" name="prenom" id="floatingInput" placeholder="Prenom" required>
      <label for="floatingInput">Prenom</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control mt-3" name="nom" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Address Email</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control mt-3"  name="sous_couver" id="floatingPassword" placeholder="Sous couver" required>
      <label for="floatingPassword">Sous couver</label>
    </div>
    <a href="{{route('Yaro')}}">Cliquez ici</a>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Inscrire</button>
  </form>
  </div>
</div>
<img class=" rounded" src="{{asset('image/yar.jpg')}}" alt="">







@endsection