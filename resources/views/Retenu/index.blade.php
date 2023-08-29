@extends('welcome')

@section('contenu')

@if(session()->has('message'))
  <div class="alert alert-primary" role="alert">
    {{ session('message') }}
  </div>
@endif
<div>
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Nom de la Retenue</th>
    <th>Type de la Retenue</th>
    <th>Valeur de la Retenue</th>
    
    <th>Actions</th>
    <th><a href="{{route('Retenu.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($retenus as $retenu)
    <tr>
      <td>{{$retenu->id}}</td>
      <td>{{$retenu->nom}}</td>
      <td>{{$retenu->type_retenu}}</td>
      <td>{{$retenu->valeur}}</td>
      
      

      <td><a href="{{route('Retenu.edit',['id'=>$retenu->id])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="{{route('Retenu.destroy',['id'=>$retenu->id])}}" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection