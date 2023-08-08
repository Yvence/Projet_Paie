@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Nom de la Retenue</th>
    <th>Valaur de la Retenue</th>
    <th>Actions</th>
    <th><a href="{{route('Retenu.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($retenus as $retenu)
    <tr>
      <td>{{$retenu->id}}</td>
      <td>{{$retenu->nom}}</td>
      <td>{{$retenu->valeur}}</td>
      

      <td><a href="{{route('Retenu.edit',$retenu->id)}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection