@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Actions</th>
    <th><a href="{{route('Departement.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($departements as $departement)
    <tr>
      <td>{{$departement->id}}</td>
      <td>{{$departement->nom}}</td>
      

      <td><a href="{{route('Departement.edit',['departement'=>$departement])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection