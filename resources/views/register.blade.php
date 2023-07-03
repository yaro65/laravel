@extends('./layout/header')

@section('page-content')


<div class="row " style="margin-left: 450px; ">

<div class="col-md-6">
<h4 class="text-center">Inscription</h4>
  <div class="card ">

   <div class="card-body">
   <form class="form"  action="{{route('yaro')}}"  method="post">
<!-- @if($errors)
@foreach ($errors->all() as $error)
 <li>{{$error}}</li>
@endforeach
@endif permet dafficher un message d'erreur -->

@method('post')
@csrf

<div class="form-floating">
  <input type="text" class="form-control" name="nom" placeholder="Nom" value ={{old('nom')}}>
  <label for="floatingInput">Nom</label>
  @error('nom')
    <div class="text text-danger">
       {{ $message }}
     </div>
 @enderror
</div>
<div class="form-floating">
  <input type="text" class="form-control mt-3" name="prenom" placeholder="Prenom" value = {{ old('prenom') }}  >
  <label for="floatingInput">Prenom</label>
  @error('prenom')
    <div class="text text-danger">
       {{ $message }}
     </div>
 @enderror
</div>
<div class="form-floating">
  <input type="text" class="form-control mt-3" name="email"  placeholder="name@example.com" value = {{ old('email') }}  >
  <label for="floatingInput">Address Email</label>
  @error('email')
    <div class="text text-danger">
       {{ $message }}
     </div>
 @enderror
</div>
<div class="form-floating mt-3">
  <input type="text" class="form-control mt-3"  name="sous_couver" placeholder="Sous couver" value = {{ old('sous_couver') }} >
  <label for="floatingInput">Sous couver</label>
  @error('sous_couver')
    <div class="text text-danger">
       {{ $message }}
     </div>
 @enderror
</div>
<button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name='btn_submit' >Inscrire</button>
</form>
   </div>

  </div>





</div>

</div>



@endsection