@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Identifiant Du Service</th>
    <th>Nom Du Poste</th>
    <th>Actions</th>
    <th><a href="{{route('Poste.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($postes as $poste)
    <tr>
      <td>{{$poste->id}}</td>
      <td>{{$poste->service->nom}}</td>
      <td>{{$poste->nom}}</td>
      
      

      <td><a href="{{route('Poste.edit',['id'=>$poste->id])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="{{route('Poste.destroy',['id'=>$poste->id])}}" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection