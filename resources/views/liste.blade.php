@extends('./layout/header')

@section('page-content')



 <table class='container table  table-responsive table-bordered shadow p-3 mb-5 bg-body-tertiary rounded fw-bold'>
		<tr  class='table-primary '>
            <th>id</th>
			<th>Nom</th>
			<th>Prénom</th>
            <th>Email</th>
            <th>Sous couver</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        @php
    $i = 1;
@endphp
        @forelse ($users as $user)

          <tr>

          <td>{{ $i }}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->sous_couver}}</td>
                <td >
                <form action="/users/{{ $user->id}}delete" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"  class=" btn btn-info" >
                        Supprimer
                    </button>
                </form>
                </td>
                <td ><a class=" btn btn-danger" href="">Modifier</a></td>

        		
          </tr>
          @php
        $i++;
    @endphp

 @empty
 @endforelse
 </table>



@endsection