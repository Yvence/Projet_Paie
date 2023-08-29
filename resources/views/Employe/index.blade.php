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
    <th>Nom</th>
    <th>Prenom</th>
    <th>Telephone</th>
    <th>Email</th>
    <th>Numéro Matricule</th>
    
    <th>Actions</th>
    <th><a href="{{route('Employe.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($employes as $employe)
    <tr>
      <td>{{$employe->id}}</td>
      <td>{{$employe->nom}}</td>
      <td>{{$employe->prenom}}</td>
      <td>{{$employe->telephone}}</td>
      <td>{{$employe->email}}</td>
      <td>{{$employe->matricule}}</td>
     

      <td><a href="{{route('Employe.edit',['id'=>$employe->id])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="{{route('Employe.destroy',['id'=>$employe->id])}}" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection